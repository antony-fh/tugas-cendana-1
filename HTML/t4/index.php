<?php include_once('bagian/header.php'); ?>
<body>
    <?php include_once('bagian/sidebar.php'); ?>
 <form>
            <section id="mainbar">
                <div class="isi">
                    <fieldset>
                     <legend><span class="fa fa-plus-circle"></span>Tambah Soal</legend>
                    <div class="isi-form">
                        <label for="isi-soal">Mata Pelajaran</label>
                        <select>
                            <option selected="selected">Bahasa Indonesia</option>
                            <option>Bahasa Inggris</option>
                            <option>Matematika</option>
                            <option>IPA</option>
                            <option>Sejarah</option>
                            <option>Ekonomi</option>
                            <option>Penjaskes</option>
                        </select>
                    </div>
                    <div class="isi-form">
                        <label for="isi-soal">Isi soal</label>
                        <input type="text" name="isi-soal">
                    </div>
                    <div class="isi-form">
                        <label for="isi-soal">Jawaban A</label>
                        <input type="text" name="isi-soal">
                    </div>
                    <div class="isi-form">
                        <label for="isi-soal">Jawaban B</label>
                        <input type="text" name="isi-soal">
                    </div>
                    <div class="isi-form">
                        <label for="isi-soal">Jawaban C</label>
                        <input type="text" name="isi-soal">
                    </div>
                    <div class="isi-form">
                        <label for="isi-soal">Jawaban D</label>
                        <input type="text" name="isi-soal">
                    </div>
                    <div class="isi-form">
                        <label for="isi-soal">Jawaban Benar</label>
                        <input type="text" name="isi-soal">
                    </div>
                    <div class="isi-form">
                        <button>Tambah</button>
                    </div>
                </fieldset>
            </div>
        </section>
</form>
<!---->
    </div>
</section>
</body>
</html>