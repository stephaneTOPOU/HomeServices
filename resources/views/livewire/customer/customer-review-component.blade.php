<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Avis</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Avis</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div>
                        <div class="container" style="padding: 30px 0;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="review_form_wrapper">
                                        <div id="comments">
                                            <h2 class="woocommerce-Reviews-title">ajouter un avis pour</h2>
                                            <ol class="commentlist">
                                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                    id="li-comment-20">
                                                    <div id="comment-20" class="comment_container">
                                                        <img alt=""
                                                            src="{{ asset('assets/images/products') }}/{{ $orderItem->product->image }}"
                                                            height="80" width="80">
                                                        <div class="comment-text">
                                                            <p class="meta">
                                                                <strong
                                                                    class="woocommerce-review__author">{{ $orderItem->product->name }}</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div><!-- #comments -->
                                        <div id="review_form">
                                            @if (Session::has('message'))
                                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                            @endif
                                            <div id="respond" class="comment-respond">
                                                <form wire:submit.prevent="addReview" id="commentform" class="comment-form">
                                                    <div class="comment-form-rating">
                                                        <span>Votre note</span>
                                                        <p class="stars">
                    
                                                            <label for="rated-1"></label>
                                                            <input type="radio" id="rated-1" name="rating" value="1"
                                                                wire:model="rating">
                                                            <label for="rated-2"></label>
                                                            <input type="radio" id="rated-2" name="rating" value="2"
                                                                wire:model="rating">
                                                            <label for="rated-3"></label>
                                                            <input type="radio" id="rated-3" name="rating" value="3"
                                                                wire:model="rating">
                                                            <label for="rated-4"></label>
                                                            <input type="radio" id="rated-4" name="rating" value="4"
                                                                wire:model="rating">
                                                            <label for="rated-5"></label>
                                                            <input type="radio" id="rated-5" name="rating" value="5"
                                                                checked="checked" wire:model="rating">
                                                            @error('rating')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </p>
                                                    </div>
                                                    <p class="comment-form-comment">
                                                        <label for="comment">Votre avis <span class="required">*</span>
                                                        </label>
                                                        <textarea id="comment" name="comment" cols="45" rows="8" wire:model="comment"></textarea>
                                                        @error('comment')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                    </p>
                                                </form>
                    
                                            </div><!-- .comment-respond-->
                                        </div><!-- #review_form -->
                                    </div><!-- #review_form_wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

