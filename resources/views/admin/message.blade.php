<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Preço TV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Estrutura do Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Email já cadastrado na base!!
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <a class="btn btn-primary" href="register">Cadastro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Link para o JS do Bootstrap 5 e suas dependências -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Script para abrir o modal automaticamente -->
    <script>
        $(document).ready(function() {
            $('#messageModal').modal('show');
        });
    </script>

</body>

</html>
