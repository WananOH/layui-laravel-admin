<div class="layui-card-body ">
    <form class="layui-form" method="post" action="{{ route("role.store") }}" id="layer-form">
        @csrf
        <div class="layui-form-item">
            <label class="layui-form-label">名称</label>
            <div class="layui-input-block">
                <input type="text" name="name" required value="{{ old("name") }}"  lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">Guard</label>
            <div class="layui-input-block">
                <select name="guard_name" lay-verify="required">
                    <option value=""></option>
                    {!! admin_enum_option_string("guard_names") !!}
                </select>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">描述</label>
            <div class="layui-input-block">
                <textarea name="description" placeholder="请输入内容" class="layui-textarea"></textarea>
            </div>
        </div>
    </form>
</div>