
<div class="form-group mt-2 col-2" >
    <div wire:ignore>
        <select   wire:model="tahun" class="custom-select  @error('tahun') is-invalid @enderror">
            <option selected>Tahun</option>
            @foreach ($getTahun as $key => $item)
            <option value="{{ $item->years }}">{{ $item->years }}</option>
            @endforeach
        </select>
        @error('tahun')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

     
</div>

<div class="col-md-12 mt-2">

  <div class="card">
    <div class="card-header text-xs font-weight-bold text-success text-uppercase mb-1">Grafik Pengeluaran Bulanan Tahun {{ (date('Y')) }}</div>
    <div class="card-body">
        <div id="grafik"></div>
    </div>
  </div>


  <table class="table table-bordered">
    <thead>
      <tr class="text-center">
        <th style="width:50px">No</th>
        <th style="width:150px">Unit Wilayah</th>
        <th style="width:125px">Nama Barang</th>
        <th style="width:125px">Type Barang</th>
        <th style="width:125px">Total</th>
        <th  style="width:250px">Pengeluaran</th>
      </tr>
    </thead>

    <tbody class="text-center">
     
      @foreach ($detailPengiriman as $key => $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->namaBarang }}</td>
        <td>{{ $item->typeBarang }}</td>
        <td>{{ $item->QtyTotal }}</td>
        <td>@currency( $item->total )</td>
    </tr>
      @endforeach
    </tbody>
  </table>
  <br>

 
<!-- /.Table User --> 
</div>

@push('script')

<!-- Fungsi Grafik -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script type="text/javascript">
    
    var bulan = <?php echo json_encode($bulan)?>;
    var graf = <?php echo json_encode($graf)?>;
    
    
    Highcharts.chart('grafik', {
     
      title: {
        text: ''
      },
      credits: {
        enabled: false
      },  
      xAxis: {
        categories: bulan
      },
      yAxis: {
        min: 0,
        title: {
            text : 'Nominal Pengeluaran Bulanan'
          }
      },
      tooltip: {
        valueSuffix: ' (Rupiah)'
      },
      plotOptions: {
        column: {
          allowPointSelect: true
        }
      },
      series: [
       
        {
          name: "Tahun",
          data: graf
        }
      ]

    });
</script>
@endpush






