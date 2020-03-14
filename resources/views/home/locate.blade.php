<!-- Main content -->
<section class="content" id="location">
    <h2>Taxi gần đây</h2>
    <p id="locate"></p>
    <table class="table table-bordered table-striped">
        <tr>
            <td>Hãng taxi</td>
            <td>Hotline</td>
            <td>Địa chỉ</td>
        </tr>
        @foreach($hotlines as $hotline)
            @php
                $lat_loca = $hotline->latitude;
                $lon_loca = $hotline->longitude;
                $r = 6371;

            $delta1 = ($lat_loca - $latitude) * (pi() / 180);
            $delta2 = ($lon_loca - $longitude) * (pi() / 180);
            $phi1 = $latitude * (pi() /180);
            $phi2 = $lat_loca * (pi() /180);
            $a = sin($delta1 / 2) * sin($delta1 / 2) + cos($phi1) * cos($phi2) * sin($delta2 / 2) * sin($delta2 / 2);
            $c = 2 * atan2(sqrt($a), sqrt(1-$a));
            $d = $r * $c;
            @endphp
            @if($d <= 5)
                <tr>
                    <td>{{ $hotline->name }}</td>
                    <td>{{ $hotline->hotline }}</td>
                    <td>{{ $hotline->address }}</td>
                </tr>
            @endif
        @endforeach
    </table>
    <div style="text-align: center">
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {

        if (navigator && navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showLocation, error,{enableHighAccuracy: true, maximumAge:10000});
        } else {
            $('#location').html('Geolocation is not supported by this browser');
        }

        function error(errorObj) {
            $('#location').html(errorObj.code + ": " + errorObj.message);
        }
        function showLocation(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            $.ajax({
                type: 'POST',
                url: '{{ url('/postLocate') }}',
                data: {
                    latitude: latitude,
                    longitude: longitude,
                },
                success: function (data) {
                    if (data) {
                        $("#location").html(data);
                    } else {
                        $("#location").html('Không lấy được dữ liệu');
                    }
                }
            });
        }
    });
</script>
<!-- /.content -->
