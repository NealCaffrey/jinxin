<div class="{{$viewClass['form-group']}}">

    <label class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <div {!! $attributes !!} style="width: 100%; height: 100%;">
            <p>{!! $value !!}</p>
        </div>

        <input type="hidden" name="{{$name}}" value="{{ old($column, $value) }}" />

        @include('admin::form.help-block')

    </div>
</div>

<!-- script标签加上 "init" 属性后会自动使用 Dcat.init() 方法动态监听元素生成 -->
<script src="/vendor/wangEditor-4.7.13/dist/index.js"></script>
<script require="@wang-editor" init="{!! $selector !!}">
    var E = window.wangEditor
    // id 变量是 Dcat.init() 自动生成的，是一个唯一的随机字符串
    var editor = new E('#' + id);
    editor.config.zIndex = 0
    // editor.config.uploadImgShowBase64 = true
    editor.config.uploadImagesAuto = true
    editor.config.uploadImgServer = '/jinxin_upload'
    editor.config.uploadFileName = 'image'
    editor.config.uploadImgParams = {
        _token:"{!! csrf_token() !!}",
        sign:"sfjsdlfsNLKNSDOIJL"
    }
    editor.config.colors = [
    '#000000',
    '#FFFFFF',
    '#FF0000',
    '#00FF00',
    '#0000FF',
    '#FFFF00',
    '#00FFFF',
    '#FF00FF',
    '#C0C0C0',
    '#808080',
    '#FFA07A',
    '#FFA500',
    '#808000',
    '#800080',
    '#FFD700',
    '#A52A2A',
    '#D2691E',
    '#EE82EE',
    '#006400',
    '#008B8B',
    '#8B008B',
    '#00008B'
    ];

    editor.config.onchange = function (html) {
        $this.parents('.form-field').find('input[type="hidden"]').val(html);
    }
    editor.create()
</script>
