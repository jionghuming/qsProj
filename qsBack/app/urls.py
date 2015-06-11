from django.conf.urls import patterns, url

from qs import views

urlpatterns = patterns('',
    url(r'^$', views.index, name='index'),
    url(r'^sendqs/$', views.sendqs, name='sendqs'),
    url(r'^show/$', views.showall, name='showall'),

) 
