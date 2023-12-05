<!--begin: Datatable-->
<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                @foreach (Config::get('languages') as $lang => $language)
                <th>{{ __('Name') }} ({{ $language['name'] }})</th>
                @endforeach
                <th>{{ __('Price') }}</th>
                <th>{{ __('Sale Price') }}</th>
                <th>{{ __('Discount') }}</th>
                <th>{{ __('Sale Type') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name_tm }}</td>
                <td>{{ $product->name_en }}</td>
                <td>{{ $product->name_ru }}</td>
                <td>
                    <span
                        class="label label-lg font-weight-bold label-{{ $product->sale_price ? 'light-danger' : 'light-success' }} label-inline">
                        @if($product->sale_price)
                        <del>{{ $product->price }} {{ __('manat') }}</del>
                        @else
                        {{ $product->price }} {{ __('manat') }}
                        @endif
                    </span>
                </td>
                <td>
                    @if($product->sale_price)
                    <span class="label label-lg font-weight-bold label-success label-inline">
                        {{ $product->sale_price }} {{ __('manat') }}
                    </span>
                    @endif
                </td>
                <td>
                    @if($product->discount)
                    <span class="label label-lg font-weight-bold label-danger label-inline">-{{ __($product->discount) }}%</span>
                    @endif
                </td>
                <td>
                    @if($product->sale_type)
                    <span
                        class="label label-lg font-weight-bold label-success label-inline">{{ __($product->sale_type) }}</span>
                    @endif
                </td>
                <td>@include('admin-panel.product.product-action', ['model' => $product])</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        <div>
            {{ $products->links('layouts.admin.pagination') }}
        </div>
    </div>
</div>
<!--end: Datatable-->
