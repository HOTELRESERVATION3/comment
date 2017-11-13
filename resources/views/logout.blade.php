 <form action="user_logout" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token() }}">
        <input type="submit" name="" value="logout" />
        </form>