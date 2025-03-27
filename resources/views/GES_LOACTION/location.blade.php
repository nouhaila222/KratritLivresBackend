<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout')
    <div class="container">
        <h2>liste des commandes</h2>
        <div class="c1">
           <label for="filterDate" class='from-label'>Filter par :</label>
           <select  id="filterDate" class="form-select" onchange="filterorders()">
            <option value="all">Toutes les dates</option>
            @foreach ($dates as $date)
            <option value="{{$date}}" {{request('date') == $date ? 'selected': ''}}>{{$date}}</option>    
            @endforeach
           </select>
        </div>
    </div>
    <script>
        function filterorders(){
            let selectedDate = document.getElementById('filterDate').value;
            window.location.href= '{{url(commandes)}} ?date='+ selectedDate;
        }
    </script>
        <main class='main'>
            <h1>Commandes</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Client</th>
                        <th>Date commande</th>
                        <th>Statut</th>
                        <th>Montant total</th>
                        <th>Mode de paiement</th>
                        <th>Statut de paiement</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commandes as $commande)
                    <tr>
                       <td>{{$commande->numero}}</td>
                       <td>{{$commande->client}}</td>
                       <td>{{$commande->date_commande}}</td>
                       <td>
                       @php
                        $statusClasses=[
                            'En attente'=> 'warning',
                            'En preparation'=>'info',
                            'Expediee'=>'success',
                            'Annulee'=>'danger',
                            'livree'=>'success'
                       ];
                       $statusClass=$statusClasses[$commande->statut] ?? 'secondary';
                       @endphp
                          <span class="badge{{$statusClass}}">{{$commande->statut}}</span>
                       </td>
                       <td>{{$commande->montant_total}}</td>
                       <td>{{$commande->mode_paiement}}</td>
                       <td>
                        @php
                            $paiementClass=$commande->statut_paiement == 'paiement effectue' ?
                             'success' : 'danger'; 
                        @endphp
                        <span class="badge{{$paiementClass}}">{{$commande->statut_paiement ?? 'Non defini'}}</span>
                       </td>
                       <td>
                        <div class="dropdown">
                            <span>icon</span>
                            <div class="dropdown_content">
                                <a href="#">Mise a jour du statut</a>
                                <a href="#">Mise a jour du paiement</a>
                                <a href="#">Detail de commande</a>
                                <a href="#">Detail du client</a>
                                <a href="#">Telecharger la facture</a>
                            </div>
                        </div>
                       </td>
                    </tr>
        
                    @endforeach
                </tbody>
            </table>
        </main>
</body>
</html>