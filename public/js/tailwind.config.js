module.exports = {
    mode: "jit",
    purge: [
        './src/views/**/*.html',
        './src/js/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                dark: "#181922",
                dark1: "#112038",
                dark2: "#212529",
                dark3: "#3c485c",
                dark4: "#0c1628",
                dark5: "#040910",
                darkopacity: 'rgba(0,0,0,0.6)',
                black2: '#333',
                white1: '#f2f4f6',
                primary: "#202025",
                secondary: "",
                accent: "#DB0022",
                warning: "#0000FF",
                darkblue: "#3984be",
                darkblue2: "#111f38",
                darkblue3: '#276a9e',
                darkblue4: 'rgb(33, 37, 41)',
                darkgray: "#f2f4f6",
                darkgray2: '#5d6678',
                lightgray1: '#d6d6d6',
                gray1: '#ced4da',
                gray2: 'rgba(17,32,56,.7)',
                gray3: '#f6f6f6',
                gray4: '#959595',
                gray5: '#ccc',
                gray6: '#ececec',
                lightblue: '#97c0e0',
                lightblue2: '#3784c0',
                lightblue3: '#0c9ec7',
                silver1: '#e8e8e8',
                silver2: '#f7f7f7',
                silver3: '#e4e4e4',
                silver4: '#e0e0e0',
                silver5: '#f8f8f8',
                footerlinks: '#999999',
                salesColor: '#FF1F1F',
                btnCredit: '#d92008',
                errorColor: '#e02b27',
                orange1: '#ffb21e',
                orange2: '#e26d00',
                btnClear: '#cccedb',
                inpBrdr: '#e2e2ea',
                yesCol: '#00a300',
                borderClr1: '#cbcbcb',
                grayText1: '#818181',
                grayText2: '#777777'
            },
            fontFamily: {
                primary: ['Univers Next', "sans-serif"],
                secondary: ['Open Sans', "sans-serif"],
            },
            fontSize: {
                '13px': '13px',
                '15px': '15px',
                '28px': '28px',
                '7.5': '30px',
                '40': '40px',
            },
            lineHeight: {
                '1.5': '1.5',
                '14px': '14px',
                '18px': '18px',
                '37px': '37px',
                '39px': '39px',
                '41px': '41px',
            },
            backgroundPosition: {
                '50': '50%',
            },
            margin: {
                '0.4': '0.4rem',
                '1.8': '1.8rem',
                '10.5': '2.625rem',
                '5px': '5px',
                '7px': '7px',
                '9px': '9px',
                '10px': '10px',
                '11px': '11px',
                '15px': '15px',
                '18px': '18px',
                '25px': '25px',
                '22px': '22px',
                '26px': '26px',
                '29px': '29px',
                '30px': '30px',
                '45px': '45px',
                '50px': '50px',
                '60px': '60px',
                '74px': '74px',
                '100px': '100px',
                '7.5': '1.875rem',
                '19': '77px',
                '-10px': '-10px',
                '-15px': '-15px',
                '-16px': '-16px',
                '-70px': '-70px',
                '1%': '1%',
                '23%': '23%',
            },
            padding: {
                '0.6': '0.6rem',
                '5px': '5px',
                '7px': '7px',
                '10px': '10px',
                '15px': '15px',
                '25px': '25px',
                '26px': '26px',
                '35px': '35px',
                '45px': '45px',
                '65px': '65px',
                '70px': '70px',
                '72px': '72px',
                '90px': '90px',
                '102px': '102px',
                '138': '138px',
                '140px': '140px',
                '176px': '176px',
                '185px': '185px',
                '7.5': '1.875rem',
                '13': '50px',
                '17': '4.5rem',
                '31.25': '31.25%',
            },
            height: {
                'calc1': 'calc(100vh - 41px)',
                'calc2': 'calc(100vh - 80px)',
                'calc3': 'calc(100vh - 120px)',
                'calc4': 'calc(100vh - 90px)',
                '7px': '7px',
                '11px': '11px',
                '15px': '15px',
                '17px': '17px',
                '20px': '20px',
                '25px': '25px',
                '34': '34px',
                '35px': '35px',
                '38px': '38px',
                '41': '41px',
                '50px': '50px',
                '68': '68px',
                '90px': '90px',
                '122': '122px',
                '197': '197px',
                '235': '235px',
                '379': '379px',
                '787': '787px',
            },
            maxHeight: {
                '38px': '38px',
                '114px': '114px',
                '185px': '185px',
            },
            minHeight: {
                '1': '1px',
                '38px': '38px',
                '48vh': '48vh',
            },
            width: {
                'calc1': 'calc(100% / 4 - 9px)',
                'calc2': 'calc(100% / 5 - 9px)',
                'calc3': 'calc(100% - 56px)',
                '6px': '6px',
                '7px': '7px',
                '15px': '15px',
                '17px': '17px',
                '19px': '19px',
                '25px': '25px',
                '50px': '50px',
                '136px': '136px',
                '280px': '280px',
                '375px': '375px',
                '1300': '1300px',
                '16%': '16%',
                '20%': '20%',
                '22%': '22%',
                '30%': '30%',
                '70%': '70%',
                '77%': '77%',
                '85%': '85%',
            },
            maxWidth: {
                '66.7': '66.667%',
                '75%': '75%',
                '80%': '80%',
                '83.3': '83.333%',
                '1/2': '50%',
                '1/4': '25%',
                '176': '176px',
                '250': '250px',
                '281': '281px',
                '1170': '1170px',
                '1370': '1370px',
                '1903': '1903px',
            },
            minWidth: {
                '137': '137px',
                '281': '281px',
                '300': '300px',
            },
            inset: {
                'calc1': 'calc(100% - 2.5rem)',
                'calc2': 'calc(100% + 32px)',
                '2%': '2%',
                '27%': '27%',
                '30%': '30%',
                '5px': '5px',
                '9px': '9px',
                '2.5': '10px',
                '13px': '13px',
                '15px': '15px',
                '25px': '25px',
                '9.5': '38px',
                '39px': '39px',
                '41px': '41px',
                '50px': '50px',
                '54px': '54px',
                '68px': '68px',
                '110px': '110px',
                '120px': '120px',
                '200px': '200px',
                '249px': '249px',
                '295px': '295px',
                '307': '307px',
                '410px': '410px',
                '535px': '535px',
                '-38%': '-38%',
                '-2px': '-2px',
                '-35px': '-35px',
                '-40px': '-40px',
                '-50px': '-50px',
                '-55px': '-55px',
                '-69px': '-69px',
                '-71px': '-71px',
                '-89px': '-89px',
                '-103px': '-103px',
                '-123px': '-123px',
                '-106px': '-106px',
                '-137px': '-137px',
                '-157px': '-157px',
                '-171px': '-171px',
                '-176px': '-176px',
                '-191px': '-191px',
                '-205px': '-205px',
                '-216px': '-216px',
                '-225px': '-225px',
                '-240px': '-240px',
                '-256px': '-256px',
                '-259px': '-259px',
                '-273px': '-273px',
                '-296px': '-296px',
                '-305px': '-305px',
                '-307px': '-307px',
                '-336px': '-336px',
                '-341px': '-341px',
                '-347px': '-347px',
                '-375px': '-375px',
                '-376px': '-376px',
                '-409px': '-409px',
                '-412px': '-412px',
                '-416px': '-416px',
                '-443px': '-443px',
                '-477px': '-477px',
            },
            borderWidth: {
                '1': '1px',
                '3': '3px',
                '7': '7px',
                '10': '10px',
            },
            borderRadius: {
                '19px': '19px',
            },
            objectPosition: {
                '50x50': '50% 50%',
                '80x20': '80% 20%',
            },
            transitionTimingFunction: {
                'inQuad': 'cubic-bezier(0, 0.55, 0.45, 1)',
                'inOutQuad': 'cubic-bezier(0.45, 0, 0.55, 1)'
            },
            zIndex: {
                '1': '1',
                '2': '2',
                '3': '3',
                '4': '4',
                '99': '99',
            },
            rotate: {
                '225': '225deg'
            },
        },
    },
    corePlugins: {},
    plugins: [],
}