<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="../plugins/bootstrap.css" rel="stylesheet" id="bootstrap-css">
  <link href="../plugins/dasbaordcss.css" rel="stylesheet" id="bootstrap-css">
  <script src="../plugins/bootstrap.js"></script>
   <script src="../plugins/jquery.js"></script>
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Customer Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav menu">
      <li class="nav-item">
        <a class="nav-link active" href="#.">Customers <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#.">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#.">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#.">Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-md-12">
            <h2><i class="glyphicon glyphicon-user"></i> Customers </h2>
         </div>   
        <div class="col-md-12">
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
              </ol>
            </nav>
         </div>
         
            <div class="row">
                <div class="col-md-2">
                    <div class="card">
                      <div class="card-header">
                        Ted James
                      </div>
                      <div class="card-body">
                        <div class="float-left">
                            <img src=""/>
                        </div>
                        <div class="float-right">
                            <p>Pheniox Arizona</p>
                            <a href="#">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                      <div class="card-header">
                        Ted James
                      </div>
                      <div class="card-body">
                        <div class="float-left">
                            <img src=""/>
                        </div>
                        <div class="float-right">
                            <p>Pheniox Arizona</p>
                            <a href="#">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                      <div class="card-header">
                        Ted James
                      </div>
                      <div class="card-body">
                        <div class="float-left">
                            <img src=""/>
                        </div>
                        <div class="float-right">
                            <p>Pheniox Arizona</p>
                            <a href="#">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                      <div class="card-header">
                        Ted James
                      </div>
                      <div class="card-body">
                        <div class="float-left">
                            <img src=""/>
                        </div>
                        <div class="float-right">
                            <p>Pheniox Arizona</p>
                            <a href="#">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                      <div class="card-header">
                        Ted James
                      </div>
                      <div class="card-body">
                        <div class="float-left">
                            <img src=""/>
                        </div>
                        <div class="float-right">
                            <p>Pheniox Arizona</p>
                            <a href="#">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                      <div class="card-header">
                        Ted James
                      </div>
                      <div class="card-body">
                        <div class="float-left">
                            <img src=""/>
                        </div>
                        <div class="float-right">
                            <p>Pheniox Arizona</p>
                            <a href="#">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="table-responsive">
            <table class="table"
                   *ngIf="products && products.length">
                <thead>
                    <tr>
                        <th>
                            
                        </th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Order Total</th>
                        <th> </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr *ngFor="let customer of customers">
                        <td>
                            <img *ngIf="product.imageUrl"
                                 [src]="customer.imageUrl"
                                 [title]="customer.firstName | uppercase"
                                 [style.width.px]="imageWidth" 
                                 [style.margin.px]="imageMargin">
                        </td>
                        <td><a [routerLink] ="['/customer', customer.id]">
                            {{customer.firstName}}
                            </a>
                        </td>
                        <td>{{ customer.lastName }}</td>
                        <td>{{ customer.address }}</td>
                        <td>{{ customer.city }}</td>
                        <td>
                           {{customer.state}}
                       </td>
                       <td>{{customer.orderTotal}}</td>
                       <td>
                            <a [routerLink] ="['/products', product.id, 'edit']">
                                view Orders
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
            </div>
            
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            





</body>
</html>