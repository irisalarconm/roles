<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Horarios</title>
    <style>
        .conteiner1{
            padding:10px;
        }
        .container_ac{
            text-align: center;
            
            padding:20px;
            width: 99%;
            margin:auto;
        }
        .actividades{
            margin:auto;
            border: 2px solid black;
        }
        .horarios{
            margin-left:150px;
            border: 2px solid black;
        }
        .box{
            padding-top:30px;
        }
    </style>
</head>
<body>

<?php include("../../templates/headeruser.php");?>
<div class="row">
    <div class="col-md-3">
        <?php include("sidebaracudiente.php"); ?>
    </div>
    <div class="col-md-9 conteiner1">
        <div class="container_ac">
            <div class="col-md-5 actividades">
                <table class="table table-striped ">
                    <tr>
                        <th>Fecha</th>
                        <th>Actividad</th>
                        <th>Hora</th>
                    </tr>
                    <tr>
                        <td>22/06/2022</td>
                        <td>Carnaval Escolar</td>
                        <td>8:00</td>
                    </tr>
                    <tr>
                        <td>19/07/2022</td>
                        <td>Celebración Día Independencia</td>
                        <td>10:00</td>
                    </tr>
                    <tr>
                        <td>07/08/2022</td>
                        <td>Batalla de Boyaca</td>
                        <td>14:00</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-1 box">

            </div>
            <div class="col-md-8 horarios">
                <table class="table table-striped">
                    <tr>
                        <th>Hora</th>
                        <th>Aula</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miércoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                    <tr>
                        <td>6:00</td>
                        <td>201</td>
                        <td>Matematicas</td>
                        <td>Inglés</td>
                        <td>Sociales</td>
                        <td>Quimica</td>
                        <td>Artes</td>
                    </tr>
                    <tr>
                        <td>8:00</td>
                        <td>304</td>
                        <td>Ed. Física</td>
                        <td>Etica</td>
                        <td>C. Naturales</td>
                        <td>Física</td>
                        <td>Matematicas</td>
                    </tr>
                    <tr>
                        <td>10:00</td>
                        <td>205</td>
                        <td>Quimica</td>
                        <td>Física</td>
                        <td>Artes</td>
                        <td>Sociales</td>
                        <td>Ed.Física</td>
                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>103</td>
                        <td>Español</td>
                        <td>Español</td>
                        <td>Etica</td>
                        <td>C-Naturales</td>
                        <td>Ambiente</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>
<?php include("../../templates/footer.php");?>

    
    
</body>
</html>