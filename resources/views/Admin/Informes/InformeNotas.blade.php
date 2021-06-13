<!doctype html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informe Sold</title>
    <style type="text/css">

        @page {
            margin: 0cm 0cm;
        }

        .pdfbgimg {
            width: 28cm;
            height: 21.8cm;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1000
        }

        body {
            margin-top: 0.5cm;
            margin-bottom: 0.5cm;
            margin-left: 0.5cm;
            margin-right: 0.5cm;
           
            border-radius: 20px;
            font-family: sans-serif;
            font-weight: bold
        }

        .certTitle {
            margin-top: 1cm;
            text-align: center;
            line-height: 1;
            font-size: 60px;
            color: #000000;
        }

        .certSubTitle {
            margin-top: 0.2cm;
            text-align: center;
            line-height: 1;
            font-size: 28px;
            color: #000000;
        }

        .certSubSubTitle {
            margin-top: 0.2cm;
            text-align: center;
            line-height: 1;
            font-size: 20px;
            color: #000000;
        }

        .certOwner {
            margin-top: 0.2cm;
            text-align: center;
            line-height: 1;
            font-size: 60px;
            color: #000000;
            text-transform: capitalize;
        }

        .certDesc {
            position: relative;
            margin-top: 0.2cm;
            text-align: center;
            width: 70%;
            left: 50%;
            transform: translate(-50%);
            margin-bottom: 0.5cm;
        }

        .certDesc p {
            font-size: 30px;
            text-shadow: 0px 0px 1px #CEB60B;
            line-height: 1;
            text-align: center;
        }

        .singatureArea {
           
            width: 60%;
            position: relative;
            left: 50%;
            transform: translate(-50%);
        }

        .tdA {
            font-size: 24px;
        }

        .tdB {
            margin-top: 20px;
            font-size: 24px;
            color: #243469;
        }
    </style>
</head>

<body>
    <div>
        <div class="main">
                <div>
                    <table>
                    <thead>
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                transaction'Id
                            </th>
                            <th>
                                payment_method
                            </th>
                            <th>
                                amount
                            </th>
                            <th>
                                descripcion
                            </th>
                        </tr>
                    </thead>
                        <tbody >
                               
                      
                                <tr>
                                    <td>{{$matriculados->user->name}}</td>
                                    <td>{{$matriculados->user->email}}</td>
                                    <td>{{$matriculados->transaction_id}}</td>
                                    <td>{{$matriculados->payment_method}}</td>
                                    <td>{{$matriculados->amount}}</td>
                                    <td>{{$matriculados->descripcion}}</td>
                                </tr>
                                <hr>
                  
                              
                        
                        <tbody>
                    </table>
                </div>
        </div>
    </div>
    
</body>

</html>