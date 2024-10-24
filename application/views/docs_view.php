<?php $this->load->view('header'); ?>

<div class="container py-5 w-75" style="max-width: 60rem; min-width: 20rem;">

    <!-- Titre centré-->
    <h3 class="heading text-center mb-5">My Documentation</h3>

    <!-- Première carte contenant la définition du SQL Generator -->
    <div class="card border-light shadow-sm my-4 px-2" style="background-color: #f8f9f9;">
        <div class="card-body">
            <h4 class="text-primary">What is a SQL Generator ?</h4>
            <p>
                It is a tool that helps you generate SQL queries based on your database schema. It allows you to select tables, columns, and conditions, and it generates the corresponding SQL query.
            </p>
        </div>
    </div>

    <!-- Deuxième carte contenant la définition de SQL -->
    <div class="card border-light shadow-sm my-4 px-2" style="background-color: #f8f9f9;">
        <div class="card-body">
            <h4 class="text-primary">What is SQL ?</h4>
            <p>
                SQL stands for Structured Query Language and is a standard language for accessing and manipulating databases.
            </p>
        </div>
    </div>

    <!-- Troisième carte contenant la définition des Joins en SQL -->
    <div class="card border-light shadow-sm my-4 px-2" style="background-color: #f8f9f9;">
        <div class="card-body">
            <h4 class="text-primary">What are Joins ?</h4>
            <p>
                SQL langage has a JOIN clause that is used to combine rows from two or more tables, based on a related column between them. There are different types of JOINs in SQL.<br>This application supports the following 3 types:
            </p>

            <!-- Illustration des types de Joins avec une image -->
            <figure class="figure w-100">
                <img src="<?php echo base_url() ?>assets/img/Joins.png" class="figure-img img-fluid rounded mx-auto d-block" alt="joins illustation" style="width: 80%;">
                <figcaption class="figure-caption text-center">Table 2 is the new table you are joining</figcaption>
            </figure>

            <!-- Liste des types de Joins supportés -->
            <ul>
                <li class="row my-1">
                    <div class="col-2 fw-bold">INNER JOIN: </div>
                    <div class="col-10">Returns rows when there is a match in both tables.</div>
                </li>
                <li class="row my-1">
                    <div class="col-2 fw-bold">LEFT JOIN: </div>
                    <div class="col-10">Returns all rows from the left table, and the matched rows from the right table.</div>
                </li>
                <li class="row my-1">
                    <div class="col-2 fw-bold">RIGHT JOIN: </div>
                    <div class="col-10">Returns all rows from the right table, and the matched rows from the left table.</div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Quatrième carte contenant la définition des conditions en SQL-->
    <div class="card border-light shadow-sm my-4 px-2" style="background-color: #f8f9f9;" id="condition">
        <div class="card-body">
            <h4 class="text-primary">What are the Conditions ?</h4>
            <p>
                The SQL langage has a WHERE Clause that is used to extract only those rows that fulfill a specified condition.<br>
                The underlined text is what you should write in the value field of the condition.
            </p>


            <!-- Tableau des opérateurs SQL avec exemples -->
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:20%">Operator</th>
                            <th style="width:30%">Description</th>
                            <th style="width:50%">Example</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>=</td>
                            <td>Equal</td>
                            <td>SELECT * FROM users WHERE type = <span class="text-decoration-underline">'admin'</span> ;</td>
                        </tr>
                        <tr>
                            <td>&lt;&gt;</td>
                            <td>Not equal</td>
                            <td>SELECT * FROM users WHERE age &lt;&gt; <span class="text-decoration-underline">30</span> ;</td>
                        </tr>
                        <tr>
                            <td>&gt;</td>
                            <td>Greater than</td>
                            <td>SELECT * FROM users WHERE age &gt; <span class="text-decoration-underline">30</span> ;</td>
                        </tr>
                        <tr>
                            <td>&gt;=</td>
                            <td>Greater than or equal</td>
                            <td>SELECT * FROM users WHERE age &gt;= <span class="text-decoration-underline">30</span> ;</td>
                        </tr>
                        <tr>
                            <td>&lt;</td>
                            <td>Less than</td>
                            <td>SELECT * FROM users WHERE age &lt; <span class="text-decoration-underline">30</span> ;</td>
                        </tr>
                        <tr>
                            <td>&lt;=</td>
                            <td>Less than or equal</td>
                            <td>SELECT * FROM users WHERE age &lt;= <span class="text-decoration-underline">30</span> ;</td>
                        </tr>
                        <tr>
                            <td>LIKE</td>
                            <td>Search for a pattern<br>'_' represents one character<br>'%' represents any amount of characters</td>
                            <td>SELECT * FROM users WHERE name LIKE <span class="text-decoration-underline">'John_'</span> ;<span class="text-secondary">//John1</span><br>
                            SELECT * FROM users WHERE name LIKE <span class="text-decoration-underline">'John%'</span> ; <span class="text-secondary">//JohnCenna</span></td>
                        </tr>
                        <tr>
                            <td>IN</td>
                            <td>To specify multiple possible values for a column</td>
                            <td>SELECT * FROM users WHERE country IN <span class="text-decoration-underline">('USA', 'Canada', 'UK')</span> ;</td>
                        </tr>
                        <tr>
                            <td>BETWEEN</td>
                            <td>Between a certain range</td>
                            <td>SELECT * FROM users WHERE age BETWEEN <span class="text-decoration-underline">25 AND 30</span> ;</td>
                        </tr>
                        <tr>
                            <td>IS NULL</td>
                            <td>To check if the column is empty</td>
                            <td>SELECT * FROM users WHERE address IS NULL;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>Everytime <b>NOT</b> is added to an operator it makes it behave in the opposite way</p>
        </div>
    </div>
</div>

<script>
    // Vérifier si un fragment existe et faire défiler jusqu'à celui-ci
    if ("<?= $fragment ?>") {
        window.location.hash = "<?= $fragment ?>";
    }
</script>

<?php $this->load->view('footer'); ?> 
