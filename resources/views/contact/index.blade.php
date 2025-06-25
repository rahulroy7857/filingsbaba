@extends('layouts.main') 
@section('title', 'Contact us') 

@section('content') 

<div class="main-content">
  <section class="tm-page-title-elementor">
    <div class="page-title-wrapper">
      <div data-elementor-type="wp-post" data-elementor-id="23109" class="elementor elementor-23109" data-elementor-post-type="page-title">
        <div class="elementor-element elementor-element-banner e-flex e-con-boxed tm-col-stretched-none tm-bg-color-over-image e-con e-parent" data-id="f791062" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
          <div class="e-con-inner">
            <div class="elementor-element elementor-element-170b48d e-con-full e-flex tm-col-stretched-none tm-bg-color-over-image e-con e-child" data-id="170b48d" data-element_type="container">
              <div class="elementor-element elementor-element-619cdf0 elementor-widget elementor-widget-tm-ele-page-title" data-id="619cdf0" data-element_type="widget" data-widget_type="tm-ele-page-title.default">
                <div class="elementor-widget-container">
                  <h1 class="title" style="">Contact Us</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="main-content-section-wrapper">
    <div class="container">
      <div class="row tm-blog-sidebar-row">
        <div class="col-lg-12">
          <div class="main-content-area">
            <div id="page-36353" class="post-36353 page type-page status-publish hentry">
              <div class="entry-content">
                <div class="page-content">
                  <div data-elementor-type="wp-page" data-elementor-id="36353" class="elementor elementor-36353" data-elementor-post-type="page">
                    <div class="elementor-element elementor-element-fdd8e03 e-flex e-con-boxed tm-col-stretched-none tm-bg-color-over-image e-con e-parent" data-id="fdd8e03" data-element_type="container">
                      <div class="e-con-inner">
                        <div class="elementor-element elementor-element-4a0c69d e-flex e-con-boxed tm-col-stretched-none tm-bg-color-over-image e-con e-child" data-id="4a0c69d" data-element_type="container">
                          <div class="e-con-inner">
                            <div class="elementor-element elementor-element-ea1b5ab e-flex e-con-boxed tm-col-stretched-none tm-bg-color-over-image e-con e-child" data-id="ea1b5ab" data-element_type="container">
                              <div class="e-con-inner">
                                <div class="elementor-element elementor-element-d5ddaae e-con-full e-flex tm-col-stretched-none tm-bg-color-over-image e-con e-child" data-id="d5ddaae" data-element_type="container">
                                  <div class="elementor-element elementor-element-1b5d3a4 elementor-widget elementor-widget-image" data-id="1b5d3a4" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                      <div class="tm-contact-form-7-wrapper">
                                        <div class="tm-contact-form tm-contact-form-7 tm-contact-form-75c121d placeholder-show tm-contact-form-align-default">
                                          <div class="wpcf7 no-js" id="wpcf7-f1184-p21471-o1" lang="en-US" dir="ltr" data-wpcf7-id="1184">
                                            <form action="{{ route('contact.store') }}" method="POST" class="wpcf7-form init" novalidate>
                                                @csrf

                                                @if(session('success'))
                                                    <div class="alert alert-success">{{ session('success') }}</div>
                                                @endif

                                                <div class="row g-3">
                                                    <div class="col-sm-6">
                                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="menu-206" class="form-control">
                                                            <option value="">Choose Our Service</option>
                                                            <option value="GST Services">GST Services</option>
                                                            <option value="FSSAI License">FSSAI License</option>
                                                            <option value="Trademark Registration">Trademark Registration</option>
                                                            <option value="Company Registration">Company Registration</option>
                                                            <option value="Income Tax Filing">Income Tax Filing</option>
                                                        </select>
                                                        @error('menu-206') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <textarea name="message" rows="5" class="form-control" placeholder="Write a Message">{{ old('message') }}</textarea>
                                                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input type="submit" value="Submit Now" class="btn btn-theme-colored2" />
                                                    </div>
                                                </div>
                                            </form>

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="elementor-element elementor-element-27f2b5d e-con-full tm-col-stretched-none e-flex tm-bg-color-over-image e-con e-child" data-id="27f2b5d" data-element_type="container">
                                  <div class="elementor-element elementor-element-254dbfe horizontal-line-align-left vertical-line-align-bottom elementor-widget elementor-widget-tm-ele-section-title" data-id="254dbfe" data-element_type="widget" data-widget_type="tm-ele-section-title.default">
                                    <div class="elementor-widget-container">
                                      <div class="tm-sc-section-title section-title">
                                        <div class="title-wrapper">
                                          <div class="sub-title-outer">
                                            <h6 class="subtitle "> NEED ANY HELP?</h6>
                                          </div>
                                          <h3 class="title ">
                                            <span class="title-part1 ">Get in touch with us</span>
                                          </h3>
                                          <div class="title-seperator-line"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="elementor-element elementor-element-cf5252f elementor-widget elementor-widget-tm-ele-text-editor" data-id="cf5252f" data-element_type="widget" data-widget_type="tm-ele-text-editor.default">
                                    <div class="elementor-widget-container">
                                      <div class="tm-text-editor"> For any inquiries or support, feel free to reach out during our business hours. We're happy to help you!</div>
                                    </div>
                                  </div>
                                  <div class="elementor-element elementor-element-94cbfa6 elementor-widget elementor-widget-tm-ele-iconbox" data-id="94cbfa6" data-element_type="widget" data-widget_type="tm-ele-iconbox.default">
                                    <div class="elementor-widget-container">
                                      <div class="tm-sc-icon-box icon-box icon-left font-icon icon-default icon-left">
                                        <div class="icon-box-wrapper">
                                          <div class="icon-text">
                                            <h5 class="icon-box-title "> Have any question?</h5>
                                            <div class="content">Contact as : +91 8825155352 , +91 7004670611</div>
                                          </div>
                                          <div class="clearfix"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="elementor-element elementor-element-f177715 elementor-widget elementor-widget-tm-ele-iconbox" data-id="f177715" data-element_type="widget" data-widget_type="tm-ele-iconbox.default">
                                    <div class="elementor-widget-container">
                                      <div class="tm-sc-icon-box icon-box icon-left font-icon icon-default icon-left">
                                        <div class="icon-box-wrapper">
                                          <div class="icon-text">
                                            <h5 class="icon-box-title">Write email</h5>
                                            <div class="content">filingsbaba1@gmail.com</div>
                                          </div>
                                          <div class="clearfix"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="elementor-element elementor-element-d59c976 elementor-widget elementor-widget-tm-ele-iconbox" data-id="d59c976" data-element_type="widget" data-widget_type="tm-ele-iconbox.default">
                                    <div class="elementor-widget-container">
                                      <div class="tm-sc-icon-box icon-box icon-left font-icon icon-default icon-left">
                                        <div class="icon-box-wrapper">
                                          <div class="icon-text">
                                            <h5 class="icon-box-title">Inquiry Time</h5>
                                            <div class="content"> Monday to Saturday <br>9:00 AM – 7:00 PM </div>
                                            <div class="content"> Brigade Senate 2, Hebbal Kempapura, Bengaluru, <br> Karnataka 560094, INDIA </div>
                                          </div>
                                          <div class="clearfix"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div> 
@endsection