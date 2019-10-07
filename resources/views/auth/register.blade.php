
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">تسجيل ورشة</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}"
                    enctype="multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-4 control-label">الاسم</label>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-4 control-label">البريد الالكتروني</label>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="phone" type="phone" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="phone" class="col-md-4 control-label">رقم التليفون</label>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="password" class="col-md-4 control-label">كلمة السر</label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <label for="password-confirm" class="col-md-4 control-label">اعادة كلمة السر</label>
                        </div>  
                        
                        <hr>
                        <div class="panel-heading">معلومات الورشة</div>
                        
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="title" type="title" class="form-control" name="title" value="{{ old('title') }}" required>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="title" class="col-md-4 control-label">اسم الورشة</label>
                        </div>
                        
                        <div class="form-group{{ $errors->has('primary_phone') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="primary_phone" type="primary_phone" class="form-control" name="primary_phone" value="{{ old('primary_phone') }}" required>

                                @if ($errors->has('primary_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('primary_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="primary_phone" class="col-md-4 control-label">الرقم الرئيسي</label>
                        </div>

                        <div class="form-group{{ $errors->has('secondry_phone') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="secondry_phone" type="secondry_phone" class="form-control" name="secondry_phone" value="{{ old('secondry_phone') }}" required>

                                @if ($errors->has('secondry_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('secondry_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="secondry_phone" class="col-md-4 control-label">لرقم الثاني</label>
                        </div>
                        
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="address" type="address" class="form-control" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="address" class="col-md-4 control-label">العنوان</label>
                        </div>

                        <div class="form-group{{ $errors->has('specialty_id') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                {{Form::select('specialty_id', $specialties,null ,['class' => 'form-control', 'id' => 'userType' ] )}}
                                @if ($errors->has('specialty_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('specialty_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="specialty_id" class="col-md-4 control-label">التخصص </label>
                        </div>

                        <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="logo" type="file" class="form-control" name="logo">
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label class="col-md-4 control-label" for="logo" >اللوجو</label>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        فحص اونلاين
                                    </label>
                                    <input type="checkbox" value="1" name="online_checkup" {{ old('online_checkup') ? 'checked' : '' }}> 
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label> طلب تقني</label>
                                    <input type="checkbox" value="1" name="technician_request" {{ old('technician_request') ? 'checked' : '' }}>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label> اصلاح</label>
                                    <input type="checkbox" value="1" name="repare_request" {{ old('repare_request') ? 'checked' : '' }}>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label> طلب سطحة</label>
                                    <input type="checkbox" value="1" name="towing_request" {{ old('towing_request') ? 'checked' : '' }}>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label> حجز معاد</label>
                                    <input type="checkbox" value="1" name="appointment_request" {{ old('appointment_request') ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>
                        
        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    التسجيل
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



