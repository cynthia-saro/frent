<?php include("layouts/head.php");
include("php/db.php");
include("php/get_objects.php");
include("php/get_myGroup.php");
?>

<body>

  <?php include_once('./components/debug.php'); ?>

  <?php include("layouts/header.php"); ?>

  <!--Carrousel news -->
  <div id="news">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" v-if="news.length > 0">
        <div class="carousel-item active">
          <p class="newsContent">> Les nouvelles de la semaines ></p>
        </div>
        <div class="carousel-item" v-for="post in news" class="homeSecurity">
          <p class="newsContent">{{post.description}}</p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <main id="homePage">

    <h1 class="groupName"><?php echo $mygroup["name"] ?></h1>

    <div class="allProdutsText">Tous les produits : </div>
    <div class="homeContentObjects">
      <?php
      foreach ($objects as $object) { /* on parcourt tous les events de la bd [obtenus grace a get_events.php] et pour chacun, on affiche son titre*/
      ?>
        <a href="product.php?id=<?php echo $object['id'] ?>">
          <div class="object">
            <img class="productPicture" src="<?php echo $object['picture'] ?>" />
            <div class="productName"><?php echo $object['name'] ?></div>
            <?php if ($object["status"] == "Réservé") { ?>
              <div class="objBooked"><?php echo $object["status"] ?></div>
            <?php } ?>
            <?php if ($object["status"] == "Disponible") { ?>
              <div class="objFree"><?php echo $object["status"] ?></div>
            <?php } ?>
          </div>
        </a>
      <?php } ?>
    </div>

  </main>

  <a href="create_object.php">
    <div class="addObjectButton">Ajouter un produit</div>
  </a>


  <?php include("layouts/footer.php"); ?>

  <!--Scripts-->
  <?php include("layouts/scripts.php"); ?>
  <script>
    /*news*/
    var newsAPI = 'http://localhost:8000/json/news'

    var news = new Vue({
      el: '#news',
      data: {
        news: [],
      },

      created: function() {
        this.fetchData()
      },

      // fonction permettant de nous lier à l'API (récupérer les données via l'API)
      methods: {
        fetchData: function() {
          var self = this
          axios.get(newsAPI)
            .then(function(response) {
              console.log(response.data)
              self.news = response.data.news
            })
            .catch(function(error) {
              console.log(error);
            })
        }
      }
    })
  </script>

</body>

</html>