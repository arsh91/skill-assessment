<form action="{{ $url }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline-block;">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <a href="javascript:void(0);" onclick="$(this).closest('form').submit();"><i
            class="fa fa-trash fa-fw iconColor"></i></a>
</form>
<style>
.iconColor {
    color: #35dc70cf;
}
</style>