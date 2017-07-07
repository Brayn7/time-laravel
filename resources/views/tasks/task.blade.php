
 <form method="post" action="/">
   {{ csrf_field() }}
      <input type="hidden" name="task_id" value="">
      <div class="container p-0">
         <div class="row" id="topNav">
            <div class="input-group col-4 inputTopNav">
               <span class="input-group-addon">Task</span>
               <input type="text" class="form-control" aria-label="Text input" name="task_name" id="task_name" placeholder="Enter task name here..." value="">
            </div>   
            <div class="col select-style">
               <select name="client_id" id="clientDrop">
                  <option selected>clients</option>
                  @foreach ($clients as $client)
                     <option value={{$client['id']}}>{{$client['name']}}</option>
                  @endforeach
               </select>
            </div>

            <div class="input-group col inputTopNav">
               <label type="text" class="input-group-addon" aria-label="Text input with checkbox">Rate</label>
               <label type="text" class="input-group-addon" aria-label="Text input with checkbox">$</label>
               <label class="input-group-addon" for="fader"><output for="fader" id="volume">100</output></label>
               <input class="ml-2" type="range" min="5" max="200" value="100" id="fader" step="5" name="rate">
            </div>
            <button class="btn" value="" name="submit" type="submit">
               <i class="fa fa-play" aria-hidden="true"></i>   
            </button>
         </div>
         </div>
      </form>
  
