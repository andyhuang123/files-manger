<style>
    .files > li {
        float: left;
        width: 150px;
        border: 1px solid #eee;
        margin-bottom: 10px;
        margin-right: 10px;
        position: relative;
    }
    .file-icon {
        text-align: left;
        font-size: 25px;
        color: #666;
        display: block;
        float: left;
    }
    .action-row {
        text-align: right;
        padding-right: 20px;
    }
    .file-name {
        font-weight: bold;
        color: #666;
        display: block;
        overflow: hidden !important;
        white-space: nowrap !important;
        text-overflow: ellipsis !important;
        float: left;
        margin: 7px 0px 0px 10px;
    }
    .file-icon.has-img>img {
         max-width: 100%;
         height: auto;
         max-height: 30px;
     }
</style>

<div class="row">
    <!-- /.col -->
    <div class="col-md-12">
        <div class="box box-primary">

            @include('dcat-admin.files-manger::_toolbar')
            <!-- /.box-body -->
            <div class="box-footer file-manager-box">

                @include('dcat-admin.files-manger::_breadcrumb')
                @if (!empty($list))
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th width="40px;">
                            <span class="file-select-all">
                                <input type="checkbox" value=""/>
                            </span>
                        </th>
                        <th>{{ trans('admin.name') }}</th>
                        <th></th>
                        <th width="200px;">{{ trans('admin.time') }}</th>
                        <th width="100px;">{{ trans('admin.size') }}</th>
                    </tr>
                    @foreach($list as $item)
                    <tr>
                        <td style="padding-top: 15px;">
                            <span class="file-select">
                                <input type="checkbox" value="{{ $item['name'] }}"/>
                            </span>
                        </td>
                        <td>
                            {!! $item['preview'] !!}

                            <a @if(!$item['isDir'])target="_blank"@endif href="{{ $item['link'] }}" class="file-name" title="{{ $item['name'] }}">
                            {{ $item['icon'] }} {{ basename($item['name']) }}
                            </a>
                        </td>

                        <td class="action-row">
                            <div class="btn-group btn-group-xs hide">
                                <a class="btn btn-default file-rename" data-toggle="modal" data-target="#moveModal" data-name="{{ $item['name'] }}"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-default file-delete" data-path="{{ $item['name'] }}"><i class="fa fa-trash"></i></a>
                                @unless($item['isDir'])
                                <a target="_blank" href="{{ $item['download'] }}" class="btn btn-default"><i class="fa fa-download"></i></a>
                                @endunless
                                <a class="btn btn-default" data-toggle="modal" data-target="#urlModal" data-url="{{ $item['url'] }}"><i class="fa fa-internet-explorer"></i></a>
                            </div>

                        </td>
                        <td>{{ $item['time'] }}&nbsp;</td>
                        <td>{{ $item['size'] }}&nbsp;</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @endif

            </div>
            <!-- /.box-footer -->
            <!-- /.box-footer -->
        </div>
        <!-- /. box -->
    </div>
    <!-- /.col -->
</div>

@include('dcat-admin.files-manger::_modal')
