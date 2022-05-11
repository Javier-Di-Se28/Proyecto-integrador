<link rel="stylesheet" href="{{ asset('assets/datatables/jquery.dataTables.min.css') }}">


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" src="/media/js/site.js?_=4a997f568ed81e6a775847062b076fa6"></script>
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fbasic_init%2Fzero_configuration.html" async></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


<script src="{{ asset('assets/datatables/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('assets/datatables/jquery-3.5.1.js') }}"></script>

<script type="text/javascript" class="init">
    $(document).ready(function() {
        $('#example').DataTable();
        
    } );
</script>

<!-- EJEMPLO DE DATATABLE -->
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Descripcion/th>
                <th>Precio de compra</p></th>
                <th>Precio de venta</th>
                <th>Stock</th>
                <th>Ganancia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

        @forelse(veterinarias as $veterinaria)

            <tr>
                <td>{{$veterinaria =>marca}}</td>
                <td>{{$veterinaria =>modelo}}</td>
                <td>{{$veterinaria =>descripcion}}</td>
                <td>{{$veterinaria =>precioCompra}}M.N</td>
                <td>{{$veterinaria =>precioVenta}}M.N</td>
                <td>{{$veterinaria =>stock}} Unidades</td>
                <td>${{ $veterinaria =>precioDeVenta = $veterinaria=>precioDecompra}} M.N </td>
                <td> </td>
                @empty
                <h3>No hay datos en la base de datos</h3>
        @endforelse

            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Descripcion/th>
                <th>Precio de compra</p></th>
                <th>Precio de venta</th>
                <th>Stock</th>
                <th>Ganancia</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>