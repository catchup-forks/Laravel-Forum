@if($loggedIn && ($reply->user_id == $currentUser->id || $auth->can('forum-delete-post')))

	    <form action="{{ route('forum.conversation.reply.destroy', [$conversation->slug, $reply->id])}}" method="POST">

	        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

	        <input type="hidden" name="reply_id" value="{{ $reply->id }}"/>

	        <button type="submit" class="{{ config('forum.icons.delete') }} delete-reply"></button>

	    </form>

@endif
	