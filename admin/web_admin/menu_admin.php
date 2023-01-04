<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
      }
      /*<!------------------------------------------------------------>*/

      .fluid{
        background-color:#F9943B;
        position:sticky;
        top:0;
        display: flex;
        flex-direction:row;
        justify-content:center;
        align-items:center;
        height:60px;
        overflow: hidden;
      }

      .fluid img[id=loco]{
        height:45px;
        margin-left:40px;
      }

      .nuvbar {
        margin-left:40px;
        height: 60px;
        width: 90px;
        display:flex;
        align-items:center;
        justify-content:center;
      }
      .nuvbar:hover .nuvbar-content {
        display: block;
        position:fixed;

      }
      .nuvbar:hover,.nuvbar-content,#row:hover{
        background-color:#E48B3D;
        color:#eff0f5;
      }
      .nuvbar a{
        text-decoration:none;
      }
      .nuvbar p{
        color:black;
        font-size:20px;
      }
      .nuvbar-content {
        margin-top:50px;
        display: none;
        position: absolute;
        top:10px;
        background-color: #F9943B;
      }
      .nuvbar-content p {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        font-size:15px;
      }
      
      
      /*<!------------------------------------------------------------>*/
      
    </style>
  </head>
  <body style="background-color: #eff0f5;"> 

    <div class="fluid">

    <div class="nuvbar">
        <p id="column">Member</p>
        <div class="nuvbar-content">
          <a id="column" href="insert_admin.php?insert=1">
            <p id="row">Add</p></a>
          <a id="column" href="select_admin.php?select=1">
            <p id="row">Show</p></a>
        </div>
      </div>

      <div class="nuvbar">
        <p id="column">Product</p>
        <div class="nuvbar-content">
          <a id="column" href="insert_admin.php?insert=2">
            <p id="row">Add</p></a>
          <a id="column" href="select_admin.php?select=2">
            <p id="row">Show</p></a>
        </div>
      </div>


      <div class="nuvbar">
        <p id="column">Brand</p>
        <div class="nuvbar-content">
          <a id="column" href="insert_admin.php?insert=3">
            <p id="row">Add</p></a>
          <a id="column" href="select_admin.php?select=3">
            <p id="row">Show</p></a>
        </div>
      </div>


      <a id="column" href="index_admin.php"><img id="loco" src="img/loco.png"></a>


      <div class="nuvbar">
        <p id="column">Type</p>
        <div class="nuvbar-content">
          <a id="column" href="insert_admin.php?insert=4">
            <p id="row">Add</p></a>
          <a id="column" href="select_admin.php?select=4">
            <p id="row">Show</p></a>
        </div>
      </div>


      <div class="nuvbar">
        <p id="column">Gear</p>
        <div class="nuvbar-content">
          <a id="column" href="insert_admin.php?insert=5">
            <p id="row">Add</p></a>
          <a id="column" href="select_admin.php?select=5">
            <p id="row">Show</p></a>
        </div>
      </div>

      <div class="nuvbar">
        <a id="column" href="../../web/home.php"><p>Home</p></a>
      </div>
                    
  </body>
</html>








    