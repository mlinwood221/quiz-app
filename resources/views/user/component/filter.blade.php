<div class="quizzes_filter d-flex">
    <input class="form-control" id="quiz_title" placeholder="Search title here..." type="text" />
    <select id="quiz_category" multiple>
        @foreach ($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>
    <select id="quiz_difficulty" class="form-control">
        <option value="all">All Difficulties</option>
        <option value="easy">Easy</option>
        <option value="medium">Medium</option>
        <option value="hard">Hard</option>
    </select>
    <select id="quiz_type" class="form-control">
        <option value="all">All Types</option>
        <option value="quiz">Multiple Choice</option>
        <option value="wordsearch">Wordsearch</option>
    </select>
    <button class="btn-main" onclick="onClickSearch()">Search</button>
</div>
