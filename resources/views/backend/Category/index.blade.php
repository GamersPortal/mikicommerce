@extends ('backend.layouts.master')


@section ('title',trans('eav.eav_category_management'))

@section('after-styles-end')
    {!! Html::style('css/backend/plugin/datatables/dataTables.bootstrap.css') !!}
    {!! Html::style('css/backend/plugin/nestable/jquery.nestable.css') !!}
@endsection


@section('page-header')
    <h1>
        {{ trans('eav.eav_category_management') }}
        <small>{{ trans('eav.active_eav_category') }}</small>
    </h1>
@endsection
@section('content')


    <div class="row">
        <div class="col-lg-6">
            <div class="alert alert-info">
                <i class="fa fa-info-circle"></i> Here are the list of Categorys and sub category.<br />
                <a href="{{route('admin.category.create')}}"><i class="fa fa-plus"> </i> {{ trans('category.add_new_category') }}</a>
            </div><!--alert info-->

            <div class="dd permission-hierarchy">
                <ol class="dd-list">
                    <li class="dd-item" data-id="">
                        @if ($categorys->count())
                            @foreach($categorys as $category)
                                @if($category->parent_id == NULL)
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="{!! $category->id !!}">
                                            <div class="dd-handle"><a href="{{route('admin.category.show',$category->id)}}">{{$category->name}}</a>
                                                <span class="pull-right">deletebutton? <a href="{{route('admin.category.destroy',$category->id)}}">  </a> </span></div>
                                        </li>
                                    </ol>
                                @endif
                            @endforeach
                        @else

                    @endif
                    </li>
                </ol>
            </div><!--master-list-->
        </div><!--col-lg-4-->
    </div>
@endsection

@section('after-scripts-end')
    {!! Html::script('js/backend/plugin/nestable/jquery.nestable.js') !!}
@stop