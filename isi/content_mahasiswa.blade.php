@include('layout.header')

<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Data Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6 m-auto">
            <ol class="list-group">
                <ol class="list-group my-4">
                    <?php
                    foreach ($KurirDataMahasiswa as $nama) {
                        echo "<li class=\"list-group-item\"> $nama </li>";
                    }
                    ?>
                </ol>
        </div>
    </div>
</div>
</div>

@include('layout.footer')