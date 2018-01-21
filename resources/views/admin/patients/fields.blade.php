{{ csrf_field() }}

<div class="form-group form-md-line-input">
    <label class="col-md-2 control-label"> {{ trans('main.phone_code') }} </label>
    <div class="col-md-6">
        <input type="text" name="phone_code" class="form-control" required>
        <div class="form-control-focus"></div>
    </div>
</div>

<div class="form-group form-md-line-input">
    <label class="col-md-2 control-label"> {{ trans('main.flag') }} </label>
    <div class="col-md-10">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                 style="width: 200px; height: 150px;"></div>
            <div>
                <span class="btn red btn-outline btn-file">
                    <span class="fileinput-new">  {{trans('main.select')}} </span>
                    <span class="fileinput-exists"> {{trans('main.change')}} </span>
                    <input type="file" name="photo" > </span>
                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                    {{ trans('main.delete') }}
                </a>
            </div>
        </div>
    </div>
</div>


<div class="tabbable-custom nav-justified">
    <ul class="nav nav-tabs nav-justified">
        <li class="active">
            <a href="#ar" data-toggle="tab"> {{ trans('main.arabic') }} </a>
        </li>
        <li>
            <a href="#en" data-toggle="tab"> {{ trans('main.english') }} </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="ar">
            <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label"> {{ trans('main.country_name') }} </label>
                <div class="col-md-10">
                    <input type="text" name="ar[name]" class="form-control"  >
                    <div class="form-control-focus"></div>
                </div>
            </div>
            <input type="hidden" name="ar[lang]" value="ar"   >

        </div>

        <div class="tab-pane" id="en">
            <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label">  {{ trans('main.country_name') }} </label>
                <div class="col-md-10">
                    <input type="text" name="en[name]" class="form-control"  >
                    <div class="form-control-focus"></div>
                </div>
            </div>
            <input type="hidden" name="en[lang]" value="en"  >

        </div>
    </div>
</div>

