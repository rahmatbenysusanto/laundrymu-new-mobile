<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.53.0/apexcharts.min.js" integrity="sha512-QbaChpzUJcRVsOFtDhh/VZMuljqvlPRIhIXsvfREDZcdqzIKdNvAhwrgW+flSxtbxK/BFpdX1y5NSO6bSYHlOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/notiflix/dist/notiflix-3.2.6.min.js"></script>

<script>
    Notiflix.Report.init({
        svgSize: '60px',
        backOverlay: true,
        backOverlayColor: '#000000',
        cssAnimation: true,
        cssAnimationDuration: 300,
        cssAnimationStyle: 'fade',
    });
</script>

@if ($message = Session::get('success'))
    <script>
        Notiflix.Report.success(
            'Berhasil',
            '{{ $message }}',
            'Ya'
        );
    </script>
@endif

@if ($message = Session::get('error'))
    <script>
        Notiflix.Report.failure(
            'Gagal',
            '{{ $message }}',
            'Ya'
        );
    </script>
@endif
