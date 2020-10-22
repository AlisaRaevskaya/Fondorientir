<div class="entity_comments">
    <div class="entity_inner__title">
        <h2>Добавить комментарий</h2>
    </div>
    <!--Entity Title -->

    <div class="entity_comment_from">
        <form action="/commentForm" method="POST" name="comForm">
        @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="inputName" name="name"
                placeholder="Name">
                $errors('name')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" class="form-control"
                id="inputEmail" name="email"placeholder="Email">
            </div>
            <div class="form-group comment">
                <textarea class="form-control"
                id="inputComment" placeholder="Comment" name="body"></textarea>
            </div>

            <input type="text" class="hidden" name="topic_reply_id" value={{$top->id}}>

            <div id="com_success"></div>
            <div class="form-group">
                <input type="submit" class="form-control"
                placeholder="Отправить" id="btn_comment">
            </div>
        </form>
    </div>
    <!--Entity Comments From -->

</div>
<!--Entity Comments -->
