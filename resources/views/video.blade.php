<div class="video">
	<div class="image">
		<img src="http://i1.ytimg.com/vi/{!! $URLID !!}/default.jpg">
	</div>
	<div class="details">
		<div>
			<?php if(isset($i)) { ?><b>{!! $i !!}.</b><?php } ?>
			{!! $videoINFO->title !!}
		</div>
		<div>
			<?php
				$__t_ = '__t_'.substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 15);
				$__tv_ = '__tv_'.substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 15);
				$__i_ = '__i_'.substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 15);
			?>
			@if(isset($list) && $list)
			<span class="btn btn-default" data-target="checkbox" for="{!! '__v_'.$URLID !!}">
				{!! Form::checkbox('__v_[]', $URLID, true, ['id' => "__v_{$URLID}"]) !!}
				<span>select</span>
			</span>
			@endif
			<a href="{!! route('download', [$URLID, 't' => $__t_, 'tv' => $__tv_, 'i' => $__i_]) !!}" class="btn btn-default download" downloading-html="<i class='fa fa-save'></i> downloading <span class='jumping-dots'><span>.</span><span>.</span><span>.</span></span>"
				 t="{!! $__t_ !!}"
				 tv="{!! $__tv_ !!}"
				 progress-url="{!! route('getPROGRESS', [$__i_]) !!}">
				<i class="fa fa-download"></i> download
			</a>
		</div>
	</div>
	<div class="clear"></div>
</div>