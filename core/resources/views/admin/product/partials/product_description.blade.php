<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">@lang('Product Description')</h5>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-md-3">
                <label>@lang('Description')</label>
            </div>
            <div class="col-md-9">
                <textarea rows="5" class="form-control description-field" name="description" id="productDescription">
                    {!! old('description', $product->description ?? '') !!}
                </textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-3">
                <label>@lang('Specification')</label>
            </div>
            <div class="col-md-9">
                <textarea rows="5" class="form-control summary-field" name="summary" id="productSummary">
                    {!! old('summary', $product->summary ?? '') !!}
                </textarea>
            </div>
        </div>
    </div>
</div>
