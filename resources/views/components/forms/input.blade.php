{{-- INPUTS DINAMICO --}}
    <div class="col-sm-6  mb-3">
      <label for="{{$id}}-label" class="form-label">{{$title}}</label>
      <input type="{{$type}}"
        class="form-control" name="{{$name}}" id="{{$id}}" aria-describedby="helpId" 
        placeholder="{{$commentHelp}}" value="{{$value}}" >

    @error($name)
        <small id="helpId" class="form-text text-danger">
            {{ $message }}
        </small>
    @enderror
    </div>


