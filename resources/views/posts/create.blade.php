<!DOCTYPE html>
<html>
<title>Edit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../lib/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Header -->
<div class="w3-container w3-red w3-center w3-padding-hor-128">
  <h1 class="w3-margin w3-jumbo">Add Activities</h1>
  <p class="w3-xlarge">Title => Year and Content => Activities</p>
  <div class="mb-20"></div>

</div>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-hor-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird"></div>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-20">
        <form method="POST" action="/posts">
            @csrf
            <div class="mb-10">
                <label class="font-bold text-gray-800" for="title">Year: </label>
                <div class="mb-4"></div>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Content: </label>
                <div class="mb-4"></div>
                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content"></textarea>
            </div>

            <div class="mb-10"></div>
            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
            <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>

            <div class="w3-right w3-margin-bottom">
                <i class="fa fa-anchor w3-padding-hor-64 w3-text-red"></i>
            </div>

            <div class="w3-container w3-margin"></div>
        </form>
    </div>

      
  </div>
</div>

<div class="mb-5"></div>
<div class="w3-container  w3-black w3-center w3-opacity w3-padding-hor-64">
    <h1 class="w3-margin w3-xlarge">Software Engineering</h1>
</div>

</body>
</html>
