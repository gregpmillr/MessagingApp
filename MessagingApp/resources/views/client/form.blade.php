<div class="form-group">
    <div class="col-lg-4 col-md-4 col-sm-4">
        {!! Form::label('fName', 'First Name:') !!}
        {!! Form::text('fName', null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3">
        {!! Form::label('lName', 'Last Name:') !!}
        {!! Form::text('lName', null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3">
        {!! Form::label('phoneNumber', 'Phone Number:') !!}
        {!! Form::text('phoneNumber', null, ['class' => 'form-control']) !!}
    </div>

    <?php
    echo Form::hidden('mailing_id', $mailingID);
    ?>

    <div class="col-lg-2 col-md-2 col-sm-2">
        <br>
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    </div>
</div>

