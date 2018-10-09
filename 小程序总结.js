<?php

一、全局变量//注意页面加载的先后顺序，在变量设置后才能获取
  1、设置全局变量
    globalData: {
      userInfo: null,
      id:null
    }
  2、给全局变量赋值
     let self = this;    //当this被占用时，用self代替
     self.globalData.id = res.data.id;
     self.globalData.userInfo = res.data.sign;
  3、获取全局变量
     app.globalData.userInfo
二、同步存储  （
//以Sync（同步，同时）结尾的都是都是同步缓存，二者的区别是，异步不会阻塞当前任务，同步缓存直到同步方法处理完才能继续往下执行。
//但是一般情况下不要用清除所有的缓存，如果想要清除相应的缓存，设置对应的缓存内容为空数组就好）
  1、设置全局变量
     wx.setStorageSync('winAwards', winAwards)
  2、获取存储内容
     var winAwards = wx.getStorageSync('winAwards') || {data:[]}   //如果没有'winAwards'则=data:[]
  3、添加修改存储内容（数组形式）
     winAwards.data.push('内容');    
     wx.setStorageSync('winAwards', winAwards)
  4、清除缓存
     wx.clearStorageSync()
三、异步存储
  1、设置全局变量
     wx.setStorage('winAwards', winAwards)
  2、获取存储内容
     var winAwards = wx.getStorage('winAwards') || {data:[]}   //如果没有'winAwards'则=data:[]
  3、添加修改存储内容（数组形式）
     winAwards.data.push('内容');    
     wx.setStorage('winAwards', winAwards)
  4、清除缓存
     wx.clearStorage()
四、foreach循环（前端）
  1、'https://segmentfault.com/a/1190000007727913'
六、带参数跳转页面
  1、 html
       '<navigator url="../navigator/navigator?title=我是navigate" >跳转到新页面</navigator>' 
      或者：
          html:
          '<button bindtap="gotoLottery" type="primary">去抽奖</button>'
          js:
          gotoLottery: function() {
            wx.redirectTo({
              url: '../navigator/navigator?title=我是navigate'
            })
          ｝  
  2、 js(新页面收到参数)
   //每个页面只能有一个onLoad
     Page({    
        onLoad: function(options) {    
          this.setData({    
            title: options.title    
          })    
        }    
    })
  3、html(新页面显示参数) 
     '<view style="text-align:center"> {{title}} </view>'
七、请求接口
    wx.request({
      url: 'https://.............', //仅为示例，并非真实的接口地址
      data: {    //给接口传的参数
         x: '' ,
         y: ''
      },
      header: {
          'content-type': 'application/json' // 默认值
      },
      success: function(res) {   //接口返回值
        console.log(res.data)
      }
    })



