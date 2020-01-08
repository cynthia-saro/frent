<?php
include("php/db.php");
?>

<?php include("layouts/head.php"); ?>

<body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php"); ?>

    <main id="homePage">

        <div id="faqs">
            <div class="panel-group" id="faqAccordion" v-if="faqs.length > 0">
                <div class="panel panel-default" v-for="post in faqs">
                    <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" :href="'#question-' + post.id">
                        <h4 class="panel-title">
                            <a href="#" class="ing">{{post.question}}</a>
                        </h4>
                    </div>
                    <div :id="'question-' + post.id" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                            <p>{{post.answer}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!--Scripts-->
    <?php include("layouts/scripts.php"); ?>
    <script>
        /*faq*/
        var faqAPI = 'http://localhost:8000/json/faq'

        var faqs = new Vue({
            el: '#faqs',
            data: {
                faqs: [],
            },

            created: function() {
                this.fetchData()
            },

            // fonction permettant de nous lier à l'API (récupérer les données via l'API)
            methods: {
                fetchData: function() {
                    var self = this
                    axios.get(faqAPI)
                        .then(function(response) {
                            console.log(response.data)
                            self.faqs = response.data.faqs
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