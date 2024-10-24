<?php $this->load->view('header'); ?>
<div class="container py-3">
    <!-- Titre centré-->
    <h3 class="heading text-center mb-md-5 mb-4"> My SQL Query Builder </h3>

    <!-- Carte pour lal prise de requête -->
    <div class="container shadow-sm my-4 px-5 py-4 rounded" style="background-color: #f8f9f9;">

        <!-- ligne contenant la selection de table et de colonne -->
        <div class="row g-3 mb-4">

            <!-- Selection de table -->
            <div class="col">
                <label for="table-primary" class="form-label">
                    <h4 class="text-primary">Table Name:</h4>
                </label>
                <select name="table-primary" id="table-primary" class="form-select">
                    <option selected disabled>Select the table name</option>
                    <?php foreach ($tables as $name) echo "<option value='$name'>$name</option>"; ?>
                </select>
            </div>

            <!-- Selection de colonne -->
            <div class="col">
                <label for="select-columns">
                    <h4 class="text-primary">Columns to show:</h4>
                </label>
                <select id="select-columns" name="select-columns"></select>
            </div>
        </div>

        <!-- Section relative au jointure -->
        <div class="my-4">

            <!-- Affichage des jointures -->
            <div id="join-section" class="list-group"></div>

            <!-- Bouton pour ajouter une jointure -->
            <div class="d-flex justify-content-center align-items-center mt-2" id="add-join">
                <p class="card-text mb-0 p-2 text-secondary">Want to add a join?</p>
                <button type="button" id="add-join-button" class="btn btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                </button>
            </div>

            <!-- Modal pour ajouter une jointure -->
            <!-- Begin: Modal -->
            <div class="modal fade" id="join-modal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <!-- Titre de la modal -->
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="Label">Add a join</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <!-- selection de type de jointure -->
                            <select name="join-type" id="join-type" class="form-select mb-3">
                                <option value="INNER">INNER</option>
                                <option value="RIGHT">RIGHT</option>
                                <option value="LEFT">LEFT</option>
                            </select>

                            <!-- selection de la table -->
                            <select name="join-table" id="join-table" class="form-select mb-3">
                                <option selected disabled>Table Name</option>
                            </select>
                            <!-- structuration de la condition de jointure -->
                            <div class="border shadow-sm rounded my-2 p-3">
                                <div class="row g-3 align-items-end">

                                    <!-- selection de la colonne de la nouvelle table -->
                                    <div class="col-md-4">
                                        <label for="join-column" class="form-label">Join Columns:</label>
                                        <select id="join-column" name="join-column" class="form-select">
                                            <option selected disabled>Select a Column</option>
                                        </select>
                                    </div>

                                    <!-- Selecion de l'operateur de jointure -->
                                    <div class="col-md-4">
                                        <label for="join-operator" class="form-label">Operator:</label>
                                        <select id="join-operator" name="join-operator" class="form-select">
                                            <option value="=" selected>=</option>
                                            <option value="<>">&lt;&gt;</option>
                                            <option value=">">&gt;</option>
                                            <option value=">=">&gt;=</option>
                                            <option value="<">&lt;</option>
                                            <option value="<=">&lt;=</option>

                                        </select>
                                    </div>

                                    <!-- selection de la colonne de la table de reference -->
                                    <div class="col-md-4">
                                        <label for="other-columns" class="form-label">Other Columns:</label>
                                        <select id="other-columns" name="other-columns" class="form-select">
                                            <option selected disabled>Select a Column</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <span id="joinAlert"></span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="join-save" class="btn btn-outline-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Modal -->

        </div>


        <!-- Section relative aux conditions -->
        <div class="my-4">

            <h4 class="text-primary">Conditions:</h4>

            <!-- Carte pour le choix de conditions -->
            <div class="border border-1 rounded p-3">
                <p class="text-secondary">Click on the buttons to add items to the 'Conditions List' below. Only items in the 'Conditions List' will be applied.</p>
                <hr style="width: 90%; margin: 1rem auto;">

                <!-- Partie de structuration d'un seul condition -->
                <div id="single-condition">
                    <div class="row g-3 align-items-start mx-2">

                        <!-- Selection de la colonne -->
                        <div class="col-md-3">
                            <label for="condition-column" class="form-label">Column Name:</label>
                            <select id="condition-column" name="condition-column" class="form-select">
                                <option selected disabled>Select a Column</option>
                            </select>
                        </div>

                        <!-- Selection de l'operateur de condition -->
                        <div class="col-md-3">
                            <label for="condition-operator" class="form-label">Operator:</label>
                            <select id="condition-operator" name="condition-operator" class="form-select">
                                <option value="=">=</option>
                                <option value="<>">&lt;&gt;</option>
                                <option value=">">&gt;</option>
                                <option value=">=">&gt;=</option>
                                <option value="<">&lt;</option>
                                <option value="<=">&lt;=</option>
                                <option value="LIKE">LIKE</option>
                                <option value="NOT LIKE">NOT LIKE</option>
                                <option value="IN">IN</option>
                                <option value="NOT IN">NOT IN</option>
                                <option value="BETWEEN">BETWEEN</option>
                                <option value="NOT BETWEEN">NOT BETWEEN</option>
                                <option value="IS NULL">IS NULL</option>
                                <option value="IS NOT NULL">IS NOT NULL</option>

                            </select>
                        </div>

                        <!-- Selection de la valeur de la condition -->
                        <div class="col-md-3">
                            <label for="condition-value" class="form-label">Value:</label>
                            <input type="text" id="condition-value" name="condition-value" class="form-control" value="0">
                            <div id="HelpBlock" class="form-text">
                                Please write the rest of the condition in the sql syntaxe. You need <a href="<?= base_url(); ?>request/help" class="link-primary" style="text-decoration: none;">help</a>?
                            </div>
                        </div>

                        <!-- Bouton pour ajouter une condition -->
                        <div class="col-md-3 d-flex align-self-center justify-content-center">
                            <button type="button" id="add-condition" class="btn btn-outline-primary" style="width: 85px;">
                                Add <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg>
                            </button>
                            <span id="condition-alert" class="text-danger"></span>
                        </div>

                    </div>
                </div>

                <hr style="width: 90%; margin: 1rem auto;">

                <!-- Partie de structuration de la liste des conditions -->
                <div class="d-flex justify-content-around mt-2">
                    <button type="button" id="parenthesis" class="btn btn-outline-primary">
                        ( )
                    </button>
                    <button type="button" id="and" class="btn btn-outline-primary">
                        AND
                    </button>
                    <button type="button" id="or" class="btn btn-outline-primary">
                        OR
                    </button>
                </div>

                <!-- affichage des conditions avec possibilité de tri et supression -->
                <div class="my-4">
                    <h5>Conditions List:</h5>
                    <p class="text-secondary">Click on the items to reorder them.</p>
                    <div class="list-group" id="sortable-list"></div>
                </div>
            </div>



        </div>

        <!-- Section relative à ORDER BY -->
        <div class="my-4">
            <h4 class="text-primary">Order:</h4>
            <div class="row align-items-end">

                <!-- Selection de la colonne selon laquelle on va trier -->
                <div class="col-md-3">
                    <label for="order-column" class="form-label">ORDER BY:</label>
                    <select id="order-column" name="order-column" class="form-select">
                        <option selected disabled>Select a Column</option>
                    </select>
                </div>

                <!-- Selection de l'ordre de tri -->
                <div class="col-md-9">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="order" id="ascending" value="ASC" checked>
                        <label class="form-check-label" for="ascending">
                            Ascending order
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="order" id="ascending" value="DESC">
                        <label class="form-check-label" for="ascending">
                            Descending order
                        </label>
                    </div>

                </div>
            </div>
        </div>

        <!-- Bouton pour l'execution de la requete -->
        <div class="d-flex justify-content-center align-items-center mt-5">
            <button type="submit" class="btn btn-primary" id="generate">
                <span class="indicator-label">Generate</span>
            </button>
        </div>

    </div>

    <!-- Carte pour l'affichage des resultats -->
    <div class="container my-4 px-0">
        <div class="card border-light shadow-sm mb-4" style="background-color: #f8f9f9;">
            <div class="card-body">
                <h4 class="text-primary card-title mb-3">Result:</h4>
                <div id="result-container">

                </div>
            </div>
        </div>
    </div>

</div>

<script src="<?php echo base_url(); ?>assets/js/dropdown.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/Pagination.js"></script>
<script>
    var sortable = new Sortable(document.getElementById('sortable-list'), {
        animation: 150
    });
</script>
<script>
    $(document).ready(function() {
        // variable pour le champ multiselect
        let selectColumns;
        // les tables de la base de données
        let tables = <?php echo json_encode($tables); ?>;

        /*
        counter: map contient table_name : nb de fois choisie
        permet de donner une alias unique à chaque table
        si la table est enlevée des jointures le nombre ne sera pas reduit pour ne pas avoir de problème
        */
        let counter = new Map();
        for (let i = 0; i < tables.length; i++) {
            counter.set(tables[i], 0);
        }

        // les tables choisies sous forme alias : table originale
        let chosen_tables = new Map();

        // fonction pour remplir les options du multiselect
        function loadOptions(response) {
            return response.map(data => ({
                value: data,
                text: data
            }));
        }

        // fonction pour avoir une liste des tables choisies sous forme "table originale AS alias"
        function getTableAlias(chosen_tables) {
            return Array.from(chosen_tables.entries()).map(([key, value]) => `${value} AS ${key}`);
        }

        // fonction pour remplir les options de select
        function updateSelectOptions(selector, options) {
            const $element = $(selector);
            $element.empty();
            $element.append('<option selected disabled>Select a Column</option>');
            options.forEach(option => {
                $element.append(`<option value="${option.value}">${option.text}</option>`);
            });
        }

        // fonction pour simplifier les requetes ajax
        function ajaxRequest(url, data, callback) {
            $.ajax({
                url: url,
                method: 'post',
                data: data,
                dataType: 'json',
                success: callback
            });
        }



        $('#table-primary').change(function() {
            // vider la page comme au debut
            $('#join-section, #sortable-list, #result-container, #joins, #condition-column').empty();

            // réinitialiser les variables
            chosen_tables.clear();
            tables.forEach(table => counter.set(table, 0));

            // récupérer la table primaire
            const tablePrimary = $(this).val();
            chosen_tables.set(tablePrimary, tablePrimary);
            counter.set(tablePrimary, 1);

            const tableAliases = getTableAlias(chosen_tables);

            // récupérer les colonnes de la table primaire
            ajaxRequest('<?= base_url() ?>request/get_column_names', {
                'tables': tableAliases
            }, response => {

                // remplir le multiselect
                selectColumns = new MultiSelect('#select-columns', {
                    name: 'select-columns',
                    data: loadOptions(response),
                    placeholder: 'Select an option',
                    search: true,
                    selectAll: true,
                    listAll: true
                });

                // remplir le select de la condition
                updateSelectOptions('#condition-column', loadOptions(response));

                // remplir le select de l'ordre
                updateSelectOptions('#order-column', loadOptions(response));
            });

        });



        $('#add-join-button').on('click', function() {
            $('#joinAlert').empty();
            $('#join-column').empty().append('<option selected disabled>Select a column</option>');

            const pt = $('#table-primary').val();
            if (!pt) {
                alert('Please select a table first');
                return;
            }

            // Remplir les options de join-table
            $('#join-table').empty().append('<option selected disabled>Select a table</option>');
            tables.forEach(element => {

                // alias = table_n ou n est le nombre de fois que la table a été choisie
                const alias = counter.get(element) ? `${element}_${counter.get(element) + 1}` : element;
                $('#join-table').append(`<option value="${element}">${alias}</option>`);
            });

            // remplir les colonnes des tables deja choisies
            ajaxRequest('<?= base_url() ?>request/get_column_names', {
                'tables': getTableAlias(chosen_tables)
            }, response => {
                updateSelectOptions('#other-columns', loadOptions(response));

            });

            // afficher le modal
            new bootstrap.Modal(document.getElementById('join-modal')).show();
        });



        $('#join-table').change(function() {
            const newTable = $(this).val();
            const newAlias = $('#join-table option:selected').html();

            // Remplir les options de join-column
            ajaxRequest('<?= base_url() ?>request/get_column_names', {
                'tables': [`${newTable} AS ${newAlias}`]
            }, response => {
                updateSelectOptions('#join-column', loadOptions(response));
            });
        });



        $('#join-save').on('click', function() {
            const joinType = $('#join-type').val();
            const joinTable = $('#join-table').val();
            const joinAlias = $('#join-table option:selected').html();
            const joinColumn = $('#join-column').val();
            const joinCondition = $('#join-operator').val();
            const otherColumn = $('#other-columns').val();


            if (joinTable && joinColumn && otherColumn) {
                // Nom de table avec l'alias si besoin
                let joinTab = joinTable === joinAlias ? joinTable : `${joinTable} AS ${joinAlias}`;

                // formulation de la jointure en SQL
                const join = `${joinType} JOIN ${joinTab} ON ${joinColumn} ${joinCondition} ${otherColumn}`;

                // contenu de la page html
                const joinContent = `<div id="${joinAlias}" class="d-flex justify-content-between align-items-center list-group-item" style="height: 40px;">\
            <input type="text" name="joins[]" readonly class="form-control-plaintext" value="${join}"/>\
            <button type="button" class="btn-close" id="join-remove" aria-label="Close"></button>\
            </div>`;

                // afficher le titre pour la première fois
                if ($('#join-section').is(':empty')) {
                    $('#join-section').append('<h4 class="text-primary">Joins List:</h4>');
                }
                // ajouter le contenu du modal dans la page html
                $('#join-section').append(joinContent);

                // enregistrer la table dans chosen_tables et counter
                chosen_tables.set(joinAlias, joinTable);
                counter.set(joinTable, counter.get(joinTable) + 1);

                // fermer le modal
                $("#join-modal").modal('hide');

                // Mettre a jour condition-column and order-column options
                ajaxRequest('<?= base_url() ?>request/get_column_names', {
                    'tables': getTableAlias(chosen_tables)
                }, response => {
                    updateSelectOptions('#condition-column', loadOptions(response));
                    updateSelectOptions('#order-column', loadOptions(response));
                });

                // ajouter les options de la nouvelle table dans le multiselect
                ajaxRequest('<?= base_url() ?>request/get_column_names', {
                    'tables': [`${joinTable} AS ${joinAlias}`]
                }, response => {
                    selectColumns.addOptions(loadOptions(response));
                });
            } else {
                $('#joinAlert').append('<div class="text text-danger" role="alert">Please make sure to select a table, column, and other column</div>');
            }

        });



        // Supprimer une jointure
        $('#join-section').on('click', '#join-remove', function() {
            const alias = $(this).parent().attr('id');

            // supprimer la table de chosen_tables
            // pas de modification de counter 
            const table = chosen_tables.get(alias);
            chosen_tables.delete(alias);

            // Mettre a jour condition-column and order-column options
            ajaxRequest('<?= base_url() ?>request/get_column_names', {
                'tables': getTableAlias(chosen_tables)
            }, response => {
                updateSelectOptions('#condition-column', loadOptions(response));
                updateSelectOptions('#order-column', loadOptions(response));
            });

            // supprimer les options de la table dans le multiselect
            ajaxRequest('<?= base_url() ?>request/get_column_names', {
                'tables': [`${table} AS ${alias}`]
            }, response => {
                selectColumns.removeOptions(loadOptions(response));
            });

            $(`#${alias}`).remove();
        });



        $('#add-condition').on('click', function() {
            $('#condition-alert').empty();
            const column = $('#condition-column').val();
            const conditionOperator = $('#condition-operator').val();
            const conditionValue = $('#condition-value').val();
            if (!column) {
                $('#condition-alert').append('Make sure to select a column');
                return;
            }

            // formulation de la condition en SQL
            const condition = `${column} ${conditionOperator} ${conditionValue}`;

            // contenu de la page html
            const conditionContent = `<div class="d-flex justify-content-between align-items-center list-group-item" style="height: 40px;">\
        <input type="text" name="conditions[]" readonly class="form-control-plaintext" value="${condition}"/>\
        <button type="button" class="btn-close" id="remove" aria-label="Close"></button>\
    </div>`;

            $('#sortable-list').append(conditionContent);
        });



        let parenthesisCount = 0;

        // Ajouter des parenthèses
        $('#parenthesis').on('click', function() {
            // id des parentheses
            parenthesisCount++;

            const parenthesisContent = `
        <div class="d-flex justify-content-between align-items-center list-group-item" style="height: 40px;" data-id="${parenthesisCount}">\
            <input type="text" name="conditions[]" readonly class="form-control-plaintext" value="("/>\
            <button type="button" class="btn-close" id="parenthesis-remove" aria-label="Close"></button>\
        </div>
        <div class="d-flex justify-content-between align-items-center list-group-item" style="height: 40px;" data-id="${parenthesisCount}">\
            <input type="text" name="conditions[]" readonly class="form-control-plaintext" value=")"/>\
            <button type="button" class="btn-close" id="parenthesis-remove" aria-label="Close"></button>\
        </div>
    `;
            if ($('#sortable-list').is(':empty')) {
                $('#sortable-list').append('<h4 class="text-primary">Conditions list:</h4>');
            }
            $('#sortable-list').append(parenthesisContent);
        });


        // Ajouter des conditions AND/OR
        $('#and, #or').on('click', function() {
            const operator = $(this).text();
            const operatorContent = `
        <div class="d-flex justify-content-between align-items-center list-group-item" style="height: 40px;">\
            <input type="text" name="conditions[]" readonly class="form-control-plaintext" value="${operator}"/>\
            <button type="button" class="btn-close" id="remove" aria-label="Close"></button>\
        </div>
    `;
            if ($('#sortable-list').is(':empty')) {
                $('#sortable-list').append('<h4 class="text-primary">Conditions list:</h4>');
            }
            $('#sortable-list').append(operatorContent);
        });

        // Supprimer une condition
        $('#sortable-list').on('click', '#remove', function() {
            $(this).closest('.list-group-item').remove();
        });


        // Supprimer des parenthèses
        $('#sortable-list').on('click', '#parenthesis-remove', function() {
            const dataId = $(this).parent().data('id');
            $(`[data-id="${dataId}"]`).remove();
        });



        function createResult(data) {
            // Si le statut de la réponse est faux, afficher un message d'erreur.
            if (data['statut'] === false) {
                return `<p class="text-danger">${data['message']}</p>`;
            }

            // Construire le message de requête SQL et commencer à créer le tableau.
            let html = `<h5>La requête SQL est :</h5><p>${data['sql']}</p>`;
            html += '<h5>Le contenu du tableau est :</h5>';

            const answer = data['answer'];

            // S'il n'y a pas de données disponibles, afficher un message.
            if (answer.length === 0) {
                return '<p>Aucune donnée disponible</p>';
            }

            // Créer une structure de tableau pour les données
            html += `
    <div class="table-responsive">
        <table class="table table-striped gy-7 gs-7">
            <thead>
                <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
    `;

            // Obtenir les noms des colonnes à partir de la première ligne du tableau de réponses.
            let columnNames = Object.keys(answer[0]);
            columnNames.forEach(columnName => {
                html += `<th>${columnName}</th>`;
            });
            html += '</tr></thead><tbody id="table-body"></tbody></table></div>'; // Corps vide à remplir par la pagination

            // Insérer le conteneur de pagination
            html += '<div id="pagination-container"></div>';

            // Insérer le HTML dans le DOM (l'endroit où cela est rendu)
            document.getElementById('result-container').innerHTML = html;

            // Initialiser la pagination
            $('#pagination-container').pagination({
                dataSource: answer,
                pageSize: 5, // Nombre de lignes par page
                showSizeChanger: true,
                callback: function(data, pagination) {
                    // Rendre les données pour la page actuelle
                    let tableBody = '';
                    data.forEach(row => {
                        tableBody += '<tr>';
                        columnNames.forEach(columnName => {
                            tableBody += `<td>${row[columnName]}</td>`;
                        });
                        tableBody += '</tr>';
                    });
                    // Remplacer le corps du tableau avec les données de la page actuelle
                    $('#table-body').html(tableBody);
                }
            });
        }




        $('#generate').click(function() {
            let table = $('#table-primary').val();
            if (!table) {
                alert('Please select a table first');
                return;
            }

            // récupération des colonnes
            let columns = [];
            $('[name="select-columns\\[\\]"]').each(function() {
                let column = $(this).val();
                column += ' AS ' + column.replace('.', '_');
                columns.push(column);
            });
            columns.reverse();
            console.log(columns);

            /*
            if (columns.length === 0) {
                $.ajax({
                    url: '<?= base_url() ?>request/get_column_names',
                    method: 'post',
                    data: {
                        'tables': getTableAlias(chosen_tables)
                    },
                    dataType: 'json',
                    success: function(response) {
                        response.forEach(function(column) {
                            column += ' AS ' + column.replace('.', '_');
                            columns.push(column);
                        });
                        console.log(columns);
                    }
                });

            }
            */

            // récupération des conditions
            let conditions = [];
            $('[name="conditions\\[\\]"]').each(function() {
                conditions.push($(this).val());
            });


            // récupération des jointures
            let joins = [];
            $('[name="joins\\[\\]"]').each(function() {
                joins.push($(this).val());
            });

            $.ajax({
                url: '<?= base_url(); ?>request/work',
                method: 'POST',
                data: {
                    tables: getTableAlias(chosen_tables),
                    table: table,
                    columns: columns,
                    conditions: conditions,
                    joins: joins,
                    orderColumn: $('#order-column').val(),
                    orderType: $('input[name="order"]:checked').val()
                },
                success: function(response) {
                    let data = JSON.parse(response);
                    createResult(data);
                    //const tableHtml = createResult(data);
                    //$('#result-container').empty().append(tableHtml);
                    window.location.hash = '#result-container';
                }
            });
        });
    })
</script>

<?php $this->load->view('footer'); ?>