<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
        form {
            display: block;
            width: max-content;
            margin: 0 auto;
            padding: 20px;
        }
        .form-text{
            width: 50ch;
        }

        .btn {
            width: 70%;
        }

    </style>
    <div class="container mt-3">
        <h1 class=" text-center mb-4">Form Input</h1>
        <form id="radio-form" class="border border-dark">
        <div class="input d-flex flex-column align-items-center">
        <label class="mt-2">Nama</label>
        <input class="form-text p-1 d-flex" type="text" placeholder="masukan nama">
        <label class="mt-3">Nomor ploisi</label>
        <input class="form-text p-1 d-flex" type="text" placeholder="masukan plat-no">
        <label class="mt-3">pilih jenis mobil</label>
        <select name="pets" id="pet-select">
        <option value="">--Please choose an option--</option>
        <option value="inova">Inova</option>
        <option value="brv">Brv</option>
        <option value="fortuner">Fortuner</option>
        </select>
        <fieldset class="border border-secondary mt-3 p-3">
            <legend>choose item</legend>
            <div>
            <input type="radio" id="item1" value="1" >
            <label for="">Oli</label>
            </div>
            <div>
            <input type="radio" id="item2" value="2">
            <label for="">Ban</label>
            </div>
            <div>
            <input type="radio" id="item3" value="3">
            <label for="">masih bingung</label>
            </div>

        </fieldset>
        <label class="mt-3">DMY</label>
        <input type="date" id="birthday" name="birthday">
        </div>
        <center>
        <button class="btn btn-primary mt-3 p-1">submit</button>
        </center>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script>
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', (e) => {
                // Check if this radio button is already selected
                if (e.target.checked) {
                    // Uncheck it if already selected
                    e.target.checked = false;
                } else {
                    // Otherwise, check this one
                    document.querySelectorAll('input[type="radio"]').forEach(r => r.checked = false);
                    e.target.checked = true;
                }
            });
        });
    </script> --}}
</body>
</html>
