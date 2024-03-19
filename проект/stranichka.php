<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        
body {
  margin: 0;
  background-color: #123;
  color:white
}
div{
    text-align: center

}
.row{
    display: flex;

flex-direction: row;
}
header {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #123;
  color: white;
  min-height: 50vh;
  padding: 0px;
}

.header {
  overflow: hidden;
  background-color: #0b1622;
  padding: 10px 20px;
}




.header a {
  float: left;
  color: rgb(255, 255, 255);
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

img{
    width: 100px;
}


input[type=”text” i]{
  padding: 8px 20px;
  border-radius: 50px;
  background-color: #123;
  border-color: white;
  margin-right: 30px;
  border: 0;
}


.book-button{
  padding: 10px 30px;
  border-radius: 50px;
}


.header-right {
  float: right;
  display: flex;
  align-items: center;
}


@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }


  .header-right {
    float: none;
  }
}


    </style>
</head>
<body>
  <header>
    <div class="header">
      <div class="header-right">

        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
          </form>
        </div>
        <a class="active" href="#home">Главная</a>
        <a href="#contact">Мои книги</a>
        <a href="#about">Подборка</a>
        <button class="book-button">Необходимое</button>
      </div>
     
    </div>
  </header>
<div>
   <h1>Добро пожаловать</h1>
   <h2>для вас</h2>
<div class="row">
<div>
    <div>
    <a href="#">
      <img
        src="https://cdn1.ozone.ru/s3/multimedia-e/6407310206.jpg"
      />
    </a>
    <div>Кори Альтхофф</div>
</div>
  <div>

    <div>
      <div>Сам себе программист</div>
</div>
    <button>Читать</button>
  </div>
  </div>

  <div>
    <div>
    <a href="#">
      <img
        src="https://main-cdn.sbermegamarket.ru/big2/hlr-system/1603151/100023063945b0.jpg"
      />
    </a>
    <div>Арнольд Виллмер</div>
</div>
  <div>

    <div>
      <div>Программирование на с#</div>
</div>
    <button>Читать</button>
  </div>
  </div>

  <div>
    <div>
    <a href="#">
      <img
        src="https://фантазеры.рф/wa-data/public/shop/products/64/90/39064/images/87973/87973.750x0.jpg"
      />
    </a>
    <div>Антон Спрол</div>
</div>
  <div>

    <div>
      <div>Сам себе программист</div>
</div>
    <button>Читать</button>
  </div>
  </div>

</div>
   <h2>Не профильные предметы</h2>
   <h3>Философия</h3>
   <h3>Математика</h3>
   <h3>История</h3>
</div>
</body>
</html>