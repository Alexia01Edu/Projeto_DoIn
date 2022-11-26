<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <script>
function handleFileSelect (evt) {
  // Loop through the FileList and render image files as thumbnails.
  for (const file of evt.target.files) {
 
    // Render thumbnail.
    const span = document.createElement('span')
    const src = URL.createObjectURL(file)
    span.innerHTML = 
      '<img style="height: 75px; border: 1px solid #000; margin: 5px"'+
      'src="${src}" title="${escape(file.name)}">'

    document.getElementById('list').insertBefore(span, null)
  }
}

document.getElementById('files').addEventListener('change', handleFileSelect, false);
    </script>
</head>

<body>
        <form method = "post" action ="" enctype="multipart/form-data" id="formProd"> 
        <input type="file" accept="image/*" id="files" multiple />
        <output id="list" style="display:flex"></output>
        </form>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
</body>
</html>