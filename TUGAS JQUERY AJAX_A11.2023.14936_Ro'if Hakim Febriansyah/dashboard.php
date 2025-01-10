<?php
//query untuk mengambil data article
$sql1 = "SELECT * FROM article ORDER BY Tanggal DESC";
$hasil1 = $conn->query($sql1);

//menghitung jumlah baris data article
$jumlah_article = $hasil1->num_rows;

//query untuk mengambil data gallery
$sql2 = "SELECT * FROM gallery ORDER BY tanggal DESC";
$hasil2 = $conn->query($sql2);

//menghitung jumlah baris data gallery
$jumlah_gallery = $hasil2->num_rows;
?>
<div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center pt-4">
    <div class="col">
        <div class="card border border-primary mb-3 shadow" style="max-width: 18rem; height:8rem">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3">
                        <h4 class="card-title mt-2"><i class="bi bi-newspaper"></i> Article</h4> 
                    </div>
                    <div class="p-3">
                        <span class="badge rounded-pill text-bg-primary fs-2"><?php echo $jumlah_article; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
    <div class="col">
        <div class="card border border-primary mb-3 shadow" style="max-width: 18rem; height:8rem">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3">
                        <h4 class="card-title mt-2"><i class="bi bi-camera"></i> gallery</h4> 
                    </div>
                    <div class="p-3">
                        <span class="badge rounded-pill text-bg-primary fs-2"><?php echo $jumlah_gallery; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 

</div>