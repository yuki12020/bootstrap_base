$(function() {
    $('#pagepiling').pagepiling({　//スクロールさせる内容のid名
        menu: '#menu',　//ナビゲーションメニューのid名
        sectionSelector: '.section',　//内容のクラス名
        sectionsColor: ['#fff', '#eee', '#ddd', '#ccc','#cc0'],//各セクションの背景の色
        anchors: ['page1', 'page2', 'page3', 'page4','page5'], //メニューのハイライト
        navigation: {
            'textColor': '#000',
            'bulletsColor': '#000',
            'position': 'right',
            'tooltips': ['page1', 'page2', 'page3', 'page4', 'page5']//menuのページ数
        },
    });
});
console.log("pagepilling");
