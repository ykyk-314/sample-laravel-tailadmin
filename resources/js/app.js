import './bootstrap';
// css
import './../css/font-satoshi.css';
import './../css/style.css';

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist';
import flatpickr from 'flatpickr';

// AlpineJSプラグインの追加
Alpine.plugin(persist);

window.Alpine = Alpine;
Alpine.start();

// Init flatpickr
flatpickr(".datepicker", {
    mode: "range",
    static: true,
    monthSelectorType: "static",
    dateFormat: "M j, Y",
    defaultDate: [new Date().setDate(new Date().getDate() - 6), new Date()],
    prevArrow:
        '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
    nextArrow:
        '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',
    onReady: (selectedDates, dateStr, instance) => {
        // eslint-disable-next-line no-param-reassign
        instance.element.value = dateStr.replace("to", "-");
        const customClass = instance.element.getAttribute("data-class");
        instance.calendarContainer.classList.add(customClass);
    },
    onChange: (selectedDates, dateStr, instance) => {
        // eslint-disable-next-line no-param-reassign
        instance.element.value = dateStr.replace("to", "-");
    },
});

flatpickr(".form-datepicker", {
    mode: "single",
    static: true,
    monthSelectorType: "static",
    dateFormat: "M j, Y",
    prevArrow:
        '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
    nextArrow:
        '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',
});

// ApexChartsをCDNから動的に読み込む関数
const loadApexCharts = () => {
    return new Promise((resolve, reject) => {
        if (window.ApexCharts) {
            resolve(window.ApexCharts);
            return;
        }

        const script = document.createElement('script');
        script.src = "https://cdn.jsdelivr.net/npm/apexcharts";
        script.onload = () => resolve(window.ApexCharts);
        script.onerror = () => reject(new Error('ApexChartsの読み込みに失敗しました'));
        document.head.appendChild(script);
    });
}

// 動的にチャートコンポーネントを読み込む
document.addEventListener('DOMContentLoaded', async () => {
    const isChartPage = document.querySelector('#chartOne') || document.querySelector('#chartTwo') || document.querySelector('#chartThree') || document.querySelector('#chartFour');
    if (isChartPage) {
        try {
            await loadApexCharts();
            console.log('ApexCharts loaded');

            if (document.querySelector('#chartOne')) {
                const { default: chart01 } = await import('./components/chart-01');
                chart01();
            }
            if (document.querySelector('#chartTwo')) {
                const { default: chart02 } = await import('./components/chart-02');
                chart02();
            }
            if (document.querySelector('#chartThree')) {
                const { default: chart03 } = await import('./components/chart-03');
                chart03();
            }
            if (document.querySelector('#chartFour')) {
                const { default: chart04 } = await import('./components/chart-04');
                chart04();
            }
        
        } catch (error) {
            console.error('ApexChartsの読み込み中にエラーが発生しました', error);
        }
    }

    if (document.querySelector('#map1')) {
        const { default: map01 } = await import('./components/map-01');
        map01();
    }
});