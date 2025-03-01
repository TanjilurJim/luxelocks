@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two custom-data-table">
                            <thead>
                                <tr>
                                    <th>@lang('Name')</th>
                                    <th>@lang('Slug')</th>
                                    <th>@lang('Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pData as $k => $data)
                                    <tr>
                                        <td>{{ __($data->name) }}</td>
                                        <td>{{ __($data->slug) }}</td>
                                        <td>
                                            <div class="button--group">
                                                @if (in_array($data->slug, ['/','mens_hair_system','mens_stock_hair_system', 'mens_custom_hair_system', 'mens_repear_hair_system', 'mens_afro_hair_system', 'mens_lace_hair_system', 'mens_skin_hair_system', 'mens_mono_hair_system','mens_frontal_hair_system', 'mens_crown_hair_system', 'mens_cap_hair_system','women','extensions','fusion-hair-extensions','tape-in','weft','clip','tools-and-accessories','women_toppers','women_integrations','women_systems','women_wigs','women_medical','clearance-hair-system','clearance-hair-extension','hair-system-supplies']))
                                                    <a href="{{ route('admin.frontend.manage.section', $data->id) }}" class="btn btn-sm btn-outline--primary"><i class="la la-pen"></i>@lang('Edit')</a>
                                                @else
                                                    <button type="button" class="btn btn-sm btn-outline--danger" disabled><i class="la la-ban"></i>@lang('Edit')</button>
                                                @endif
                                                <a href="{{ route('admin.frontend.manage.pages.seo', $data->id) }}" class="btn btn-sm btn-outline--info"><i class="la la-cog"></i>@lang('SEO Setting')</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
            </div><!-- card end -->
        </div>
    </div>
@endsection
