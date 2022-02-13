@include('shared._error')
<div class="reply-box mb-4">
  <form action="{{route('replies.store')}}" method="POST" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="topic_id" value="{{$topic->id}}">
    <div class="form-group">
      <textarea class="form-control" rows="3" placeholder="分享你的观点~" name="content">
      </textarea>
      <button type="submit" class="btn btn-primary bn-sm mt-4">
        <i class="fa fa-share mr-1"></i>
        回复
      </button>
    </div>
  </form>
</div>
