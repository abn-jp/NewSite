@extends('../resources/common/base.html')

{% extends '../resources/common/base.html' %}
{% load static %}
{% block content %}

    <div class="fixed_bg">
      <div id="time_bg">
        <div id="morning">
          <section id="topView">
            <div class="tv_inner inner">
              <div class="tv_copy">
                <div class="tv_copy_main font_en slideIn_1">Asian <br class="br_1">Business <br class="br_2">Network</div>
                <div class="tv_copy_lead slideIn_1">日本と世界のカケハシをつくる</div>
              </div>
            </div>
          </section>
        </div>
        <div id="noon">
          <section id="topMessage">
            <div class="tm_inner">
              <div class="tm_message">
                <div class="tm_message_main slideIn_1">
                  「日本と世界のカケハシをつくる」
                </div>
                <div class="tm_message_lead slideIn_1">
                  ABNはIT技術とエンジニアの成長<br>を通じて世界に通用するビジネスを<br>サポートします。
                </div>
              </div>
              <div class="tm_content">
                <div class="tm_img slideIn_1">
                  <img src="{% static 'img/top_about_us.jpg' %}" alt="">
                </div>
                <div class="tm_btn_wrapper">
                  <div class="tm_btn slideIn_1">
                    <a href="{% url 'abn:company' %}" class="font_en">ABOUT US</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="topServices">
            <div class="ts_inner inner">
              <div class="ts_title font_en">SERVICES</div>
              <div class="ts_content_list">
                <div class="ts_content slideIn_1">
                  <a href="{% url 'abn:services' %}#ses">
                    <div class="ts_content_img">
                      <img src="{% static 'img/services_engineering_service.jpg' %}" alt="SES事業" loading="lazy">
                    </div>
                    <div class="ts_content_text">
                      <div class="ts_content_text_en font_en">SYSTEM ENGINEERING SERVICES</div>
                      <div class="ts_content_text_ja">SES事業</div>
                    </div>
                  </a>
                </div>
                <div class="ts_content slideIn_2">
                  <a href="{% url 'abn:services' %}#media">
                    <div class="ts_content_img">
                      <img src="{% static 'img/services_halal_infomation.jpg' %}" alt="メディア事業 HALAL FOOD IN JAPAN" loading="lazy">
                    </div>
                    <div class="ts_content_text">
                      <div class="ts_content_text_en font_en">FOR FOREIGNER</div>
                      <div class="ts_content_text_ja">メディア事業</div>
                    </div>
                  </a>
                </div>
                <div class="ts_content slideIn_3">
                  <a href="{% url 'abn:services' %}#offshoreDevelopment">
                    <div class="ts_content_img">
                      <img src="{% static '/img/services_offshore_development.jpg' %}" alt="受託開発業" loading="lazy">
                    </div>
                    <div class="ts_content_text">
                      <div class="ts_content_text_en font_en">OFFSHORE<br>
                        DEVELOPMENT</div>
                      <div class="ts_content_text_ja">受託開発業</div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div id="twilight">
          <section id="recruit">
            <div class="r_inner">
              <div class="r_text_wrapper">
                <div class="r_text">
                  <div class="r_title font_en">RECRUIT</div>
                  <div class="r_message slideIn_1">
                    「人間力」×「技術力」を培い、<br>
                    質の高いエンジニアへ
                  </div>
                </div>
              </div>
              <div class="r_content">
                <div class="r_img">
                  <img src="{% static '/img/top_recruite.jpg' %}" alt="株式会社ABN 採用情報">
                </div>
                <div class="r_btn">
                  <a href="{% url 'abn:recruit' %}" class="font_en">READ MORE</a>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div id="night">
          <section id="news">
            <div id="app1" class="n_inner">
              <div class="n_title font_en">
                NEWS
              </div>
              <div class="n_top_content" id="news_1">
                <a v-bind:href="news_1_url" target="_blank" rel="noopener noreferrer">
                  <div class="n_top_img">
                    <img v-bind:src="news_1_img" alt="株式会社ABN ニュース" loading="lazy">
                  </div>
                  <div class="n_top_text">
                    <div v-html="news_1_date" class="n_top_date"></div>
                    <div v-html="news_1_title" class="n_top_title"></div>
                    <div v-html="news_1_body" class="n_top_body"></div>
                  </div>
                </a>
              </div>
              <div class="n_top_content" id="news_2">
                <a v-bind:href="news_2_url" target="_blank" rel="noopener noreferrer">
                  <div class="n_top_img">
                    <img v-bind:src="news_2_img" alt="株式会社ABN ニュース" loading="lazy">
                  </div>
                  <div class="n_top_text">
                    <div v-html="news_2_date" class="n_top_date"></div>
                    <div v-html="news_2_title" class="n_top_title"></div>
                    <div v-html="news_2_body" class="n_top_body"></div>
                  </div>
                </a>
              </div>
              <div class="n_top_btn">
                <a href="{% url 'abn:news' %}" class="font_en">READ MORE</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <div class="buffer">
    </div>

{% endblock %}