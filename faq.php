<?php
include("php/db.php");
include("layouts/head.php");
?>

<body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php"); ?>

    <main id="homePage">

        <div class="pageName faq">F.A.Q</div>

        <div id="faqs">
            <div class="panel-group" id="faqAccordion" v-if="faqs.length > 0">
                <div class="panel panel-default panelFaq" v-for="post in faqs">
                    <a href="#" class="ing">
                        <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" :href="'#question-' + post.id">
                            <h4 class="panel-title">
                                {{post.question}}
                            </h4>
                        </div>
                    </a>
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