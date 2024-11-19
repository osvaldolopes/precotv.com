@extends('admin.layouts.index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tabelas de Produtos</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    Aqui estão os produtos que aparecem nos monitores de cada departamento.
                    <a target="_blank" href="/">Preço TV</a>
                    .
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Produtos Cadastrados
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Descrição</th>
                                <th>Preço</th>                                
                                <th>Promoção</th>
                                <th>Data Cadastro</th>
                                <th><button type="button" class="btn btn-danger"> Deletar</button></th>                                 
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Descrição</th>
                                <th>Preço</th>                                
                                <th>Promoção</th>
                                <th>Data Cadastro</th>   
                                <th><button type="button" class="btn btn-danger"> Deletar</button></th> 
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>$320,800</td>
                                <td>$320,800</td>                               
                                <td>2011/04/25</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">                                            
                                    </div>
                                </td>                              
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>$320,800</td>
                                <td>$320,800</td>                               
                                <td>2011/04/25</td>  
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">                                            
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>$320,800</td>
                                <td>$320,800</td>                               
                                <td>2011/04/25</td> 
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">                                            
                                    </div>
                                </td>  
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>$320,800</td>
                                <td>$320,800</td>                               
                                <td>2011/04/25</td>  
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">                                            
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>$320,800</td>
                                <td>$320,800</td>                               
                                <td>2011/04/25</td>  
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">                                            
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>$320,800</td>
                                <td>$320,800</td>                               
                                <td>2011/04/25</td>  
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">                                            
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>$320,800</td>
                                <td>$320,800</td>                               
                                <td>2011/04/25</td>  
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">                                            
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>$320,800</td>
                                <td>$320,800</td>                               
                                <td>2011/04/25</td>  
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">                                            
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>$320,800</td>
                                <td>$320,800</td>                               
                                <td>2011/04/25</td>  
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">                                            
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>$320,800</td>
                                <td>$320,800</td>                               
                                <td>2011/04/25</td> 
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">                                            
                                    </div>
                                </td>  
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>$320,800</td>
                                <td>$320,800</td>                               
                                <td>2011/04/25</td>  
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">                                            
                                    </div>
                                </td> 
                            </tr>                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
