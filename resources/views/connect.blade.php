@extends('layouts.app')

@section('content')

<div class="container bg-light py-5">
    <div class="row">
       <div class="col-12 p-3">
        <form>
            <div class="text-center h3">Հետադարձ Կապ</div>
            <div class="form-row mt-5">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Անուն </label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Անուն">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Ազգանուն</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Ազգանուն">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Էլ․ Փոստ</label>
              <input type="email" class="form-control" id="inputAddress" placeholder="Էլ․ Փոստ">
            </div>
            <div class="form-group">
                <label for="inputAddress">Ձեր հաղորդագրությունը</label>
                <textarea type="textarea" class="form-control" id="inputAddress" placeholder="Ձեր հաղորդագրությունը"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Ուղարկել</button>
          </form>
       </div>
    </div>
</div>
    
@endsection