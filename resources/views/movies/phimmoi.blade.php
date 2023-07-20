@extends ('layouts.default')
@section('contents')
<div class="container pt-16">
<div class="pt-3 p-2">
            <h2 class="uppercase tracking-wider  text-lg font-semibold text-white">Phim mới nổi bật</h2>
            </div>
            <!-- Phim mới nổi bật -->
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-5 gap-0 flims">
                
                <!-- Thẻ -->
                <div class="row row-cols-1 row-cols-md-3 g-0">
                    <div class="col">
                        <a href="/play2" class="flim">
                            <div class="card bg-dark">
                            <img src="https://photo-cms-anninhthudo.epicdn.me/w800/Uploaded/2023/xtsmr/2023_05_20/dan-sao-rat-hung-hau-cua-fast-x-1760-1894.jpeg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                            <div class="card-body">
                                <h5 class="card-title">Ghosted</h5>
                                <p class="card-text">2023</p>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/play3" class="flim">
                            <div class="card bg-dark">
                            <img src="https://static.toiimg.com/photo/msid-99012361/99012361.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                            <div class="card-body">
                                <h5 class="card-title">John wich 4</h5>
                                <p class="card-text">2023</p>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/play" class="flim">
                        <div class="card bg-dark">
                        <img src="https://cdnimg.vietnamplus.vn/uploaded/xpcwvovt/2023_04_26/avatar.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body">
                            <h5 class="card-title">Avatar 2</h5>
                            <p class="card-text">2023</p>
                        </div>
                        </a>
                    </div>
                   
                </div>
                <!-- Thẻ -->
                <div class="now-playing-movies py-50 mt-5">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold text-white  pb-5  p-2">Phim mới</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 flims">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-dark">
                        <img src="https://i.guim.co.uk/img/media/1ceee59569051f649d4d19d92381f434e372bc1f/0_98_3000_1799/master/3000.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=527909d0524938fca963157ee3a3c0e1" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body ">
                            <h5 class="card-title text-white">Biệt tích</h5>
                            <p class="card-text text-white">2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark text-white">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body">
                            <h5 class="card-title">Đặc vụ Aka</h5>
                            <p class="card-text">2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark text-white">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body ">
                            <h5 class="card-title ">Tên tôi là chichiro 7</h5>
                            <p class="card-text text-white">2023</p>
                        </div>
                        </div>
                    </div>
                
                    <div class="col">
                        <div class="card bg-dark text-white">
                        <img src="https://images2.thanhnien.vn/528068263637045248/2023/3/21/shazam-fury-of-the-gods-2-16793833611391475850794.jpeg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body ">
                            <h5 class="card-title ">Shazam</h5>
                            <p class="card-text text-white">2023</p>
                        </div>
                    </div>    
                </div>
                    
            </div>
                    
        </div> <!-- end Phim bộ -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div   div class="col">
                        <div class="card bg-dark text-white">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRUYGRgYGhgYGRkZGhgYGhoYGBgZGRgZGhocIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHjQrJCs0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAECBAUGBwj/xABAEAABAwIEBAIHBQgBAwUAAAABAAIRAyEEEjFBBVFhcYGRBhMiMqGx8EJSwdHhBxQVYnKSovFDI9LiM1OCssL/xAAaAQADAQEBAQAAAAAAAAAAAAAAAQIDBAUG/8QAJxEAAgIDAAEEAQQDAAAAAAAAAAECEQMSITEEE0FRgSIyYXEFQrH/2gAMAwEAAhEDEQA/ALwapBqcBSAXScgwanDVMNT5VIEA1SDU4apQgCBCiQiQmLFQASE0I+RNkQKisWpwAjuplBLVSIqgjXqYehAIrISaKTDsTmgDspU4Vhreqg0Ssouw8KbKKtPZKA8Zd1Sdiaok1iZ1KUB9Y7BQL3n9E9WS5IfEUY3lZmNxbaTHvfOVgJPXkB1JgeK0TRcdfmuX9PWuZQY0GA+oGnwBIH4+CblrGxKLlJKjh+NcVqYl+Z1m6NYDZoHzPMrNgjmu84Z6P02m8vLoudB2W5S9GKBdJZ4bLhl6iKZ6kPSya4ef8D4i+i9rmPe0btBPy+tV6fwLiLsS9zHSRZzS7KTBa2btAB128VXq+i2GN8kf0mEOlQ/c61E03ksLoLHbF240tb4krnnNSe0eM19lxjrLqN6pSLXFpFwSD3CiGLQ4s6azyNy0+bQVVbK9WMrimeS402gQYnhHhP6tOyaAZU4YrIYnDErHqVwxS9WrApqQak2UolItTtYrhp9E4Yix0VgxTyI2VPlSsaRigJwFIBSASMyICeFMBPCAIAKUKQCeE6CyCYqeVLKnQrBlJTIUHBMlyCQq9Xsp5SmyJpA3YGFJjCitpozKSTYlEehTVxjEFrYVim9Q2bxVE/U2QamHlGfUQXVEo2U6IDDJxSUnPKjJV9J4RdTC5r08wefCPI1Y5tQaTDTDyOcNLj4LqGNPJYXpjRmiJF5cwcvbHz9lRllrFs1ww2kkct/FqdEhj3HM0CQ1rnHTeBAXR8G4vTrNLml3s3Ic0g+SzRw5lW5ne219THPrso8KoNo1HNYYEERc+N15ktWv5PWx7Lz4LFT0rol2UMrZh/J8dVaxOFGJY17ZGRzS7MC0hptcGLXCZnBKdS72hwzZvECFrtwrPVPZOUBrYAvcPblHnHkpuPwNxdO2XzDrzMQN9gAD2MJwwJYIEs9r7xAMQS0AQSPNH9WvSwSbxps8r1EFHI0gBhO1yN6oJxTWtmFApUg1GDE+VKx0CASJU3MQULoEsycFMwIrGpsaIgKWRFDVKVFlUc8GqYYphikGrQ57B5U+VFyp8qAsEGKWREDU+VAgWRL1aLlUmNQNIr+qQwxX4UH000w1Kvq1LKjEJAIBAsifIjMElRqBFD+LBylnSITFiNRbizhR9Yk5iZrUULZsO26PTYgslHYDspbNYotMYhY7BMqscx4sd4mDsVNrXKbQVnLqpm0Hq7Rwz6HqKj6bjIbvpIIBFuxVeiD6wua/KCI0bO178uei6T0n4Y5//WYJLRDxuWi4d1j8lxbOFNqOLhrvLnR4XsvOyR1kz1MM9oo6rAPyN9o5r+9a+0+zZXuDNFSqW7RPkR+a5QYdmHuIBsSZsrHC+PCg71r/AHJA6uEhxa0dYHgFCXbKyT5SO9FGAANk3q1Q9GuOtxbX2DXsdOTX2D7pne9j3WwWL0YyVcPKlG+lSpDQXOIAFyTsFztf0tpMdDSAJ950adtvihenOPdLMMzV8Od4zE9AAT4tXP0eCN+2S49fyWOXL2jow4L/AFUbZ9Pw5wy02iImRJPOPr9Ogwfpbh6gaHBoc6AbQOUzqBcdr/dJXAYz0fDRmZ8NR+iyGjLLeViOfJY7X+1s1eOvKR7NUY0yWHNl95v2mTzHLr0KrlnVcVwDjz2OZVccwaAx86lh2dziB4Acgu7xFFohzD7Lxmb2Oy6cObb9MvJyZsWvV4AhqKwBAU2krpaMEyzlT5UJrypQ7moou0zKATgKQapBqs5qIgJwFMNUg1UMgGqWVSDVIMUhQAtUmorqZUC1UFEHJpUsqQagVg3JoRCxLKmFAwlCJlSLExgi1KFMtSDUySGVTp4eVII1KFMmVBInTw6M2mpMPRGaFzybOqKQHKnAR8qi5qiy6BxsV5jj8M9lR7WGIcWm06FelY3EspMfUeYaxpe7s0TbqvMuCcWdimvqOAD87swGgBOZoHYECeixzp0pHR6drZxAOwD3HM9xd3sFzONx3rHkg+w2zOw37nXyW96XcUyMFJpu/wB8jZhtHibdpXINcTYW6nbw3/0jDBtbP8E+pmv2x/J2XoZxZ1HENcGlwILXNEXB76L2GmQ8AttOx/NfP2HflEfP5nmV0HCfTSvQ9kuzstAcYI2sYPRW1JO0c0ZLwzQ45xFoxz3vDyA57BlaXRkyMkxpofNaJxTAwPhzgdA0SSuS4kX1XsLXFpe573RyeZA+C6vgFMim5pkgk5ZuQD1XK1fT08brg+C4xndAovAG5yz/AGzKHxfg7agzss7loD06FBwXo2xr3EudmLs2Ztnam08l0TmZWgH9UOvgaTfk82/fTTeWvBuC17DbM07j+Yag7r1D0SxnrsIwFwcabnNn+WTl+EeRXJV8LSdLqzA6H2kSLcxuOi1/QGp/1K7AAGzMNAaLtOWABFsg81UJpSTMcuJuDs65lNGbRCgGojQV3uRwKKHbSCJ6tRBTyptsriMwU0+RFLCE4C1UrMNQYYpBiIApBqBUDFNTDFPKnsgKIZUxYi2TOIQMruphDyqwRKbKqsmgGVPkRsqfKmmFAcqYsR8qbKmBX9UTonbhnclepPAsG+KLKzlNouOJMzhg3IjKWU3Eq7CFUUKTkX7cY9JsundTlAdUKj613NGrK3iSc1w3TZyolxKxPS7jJwuHLme+85GbxYlzo6AeZCdfZDl9HP8A7RuOtLDhWGXWfUPJoktZ3Jg9I8uf9FctHCesdocz3fJo72A8Vg4yraoXElxNybkncnxlDfjSMPTpA2jM7qZ9kfj5LLLDZJGmDLrcn5rhV4liHVHFx955B7AQfIABRpajz8Boptpxrq7Xo0bBBL4DncyAq8KjK7ZZe/UqFGnncGkwN/HbuhOdZo+8fgFKk+H8pUvi4XBJy6dJwp+fEEEwMsN7NIB+a63h9YxlL2iDAFrj5hy83oYw0ntcZGVxBGstIgkHxB8F1/DeDsec+YuDpOp+1fnHwXHONHrYGnaZ2WHp3vqnxQkIWFwzaTAGyAOZLviSq2Nxkghtz8Asy33wc3xnjdNh9WWFzi4hkRA0zOPIbbra/Z26XOdMjM3zccs/NefcQOfFRrlbHjeV13obWdTewXy52ZuoDHSetzP/AMVc4qKT/Jjs5Wn/AEeq5E4YrDmXKfKu04aK+RLIrEJ4TEVKdQHVCxDAy+3PkqzK9knPBtqDqFhGTRrKCZJldp0VttK0iFRY0NuABtZSfidlo5t+CVFLyWC2dkxpqLHTz80PEONgCe8lNZGJ40wjWToU/q09BkIj3Toj3WDwRoF6tLInM6apNJVrKQ8I0JQrTGApPYOxTWVEvCyoWp20yU1d7m6tF9DMp6D3m1vH9E5ZaXBRxNuixTYQO3JIAHUKDKjm2IPfVGbVGhB6TZYOdnRpRGAgETP0Fa9Xm0PmoOpFXGSRnJMquppgxWMkap4C03MtALWLz79qI9vCt2y1j5mkF6NC85/aX/61P+Wk4+Lnx/8AkJbWwlGonnOMZOYkxJN+QFyVXwwDvaiGizR0FpU+Ie17MxbMet4A8/kpAQAENkJUiL3TKrYqzPEFWCEDHe5Cm7ZURqV3N6MnxP8AtFwtPM88gCVXY/U9h5D9VD17myGn3hlPjySkm1SNIUnbOg9WxwYSLEEEbw2DJ7td/io4HjOIwzjRYA5rXWLgZAnmDoqBbiDlIaWwBc2nmYImPDZdEMLMOMFxADyBZxgAmNlzS/T56elixym+Wv5OkwdapWaC93dostWrTa1hgRA/BZ/BKgAykxAmTy5lbr2jQ72XOjaa1dHl9Glmr3+1mJPcQAPNdfwikYa37RhoEWc4j3R1MjvZFGCZTD6uRriwOcA4WJbJAMbSvReCOpVaLHsa0NcA4NgWcPxBGvZXq8jq6MZS0jdfIfAZyxmcQ+Pa/NWcqKWpw1dkVqkjgbt2AyJZEeE+VUB5FhfSx7bPYHCYJb7J8tD8F0GG4kyr7THg8xoR3bsvNKT73U6T7yOexv4KpY4vxwUckl5PUWVSdU9xF1wQ4pVH/I6O6Y8VqH/kfH9TlGj+ynNfR6RSr80R1Ucl53h+L1ps93Yw7n94FTr8XqH/AJHczBjpFkvbdh7io9CZVKKFweC4zWaPfJA+9Dvib7K43j9U/aEdGj6KTgyvcR2WXqnyrkhx2puW+Q+MK5hOOO+2BlO41HhulqxqcWdQwqTjKz6OLa4SDI5i6O3EN6qaHYZ7djdR9XGih+9BP+8hOmGyCNeQpPfOqAKgSLkai2DNepscNlWlIORQWXXvB1QHsJ3QzW6JvWlPoUh/VxoZXnH7S63tsG4YJP8AU5xj/H4r0gOK8k/aDXz4p7ORa0dgxk/EuVRuzLNWpxVUS/yUnmUgZc4+A+Q+CYq2c6IuKq4hpeQxokk2Rqr1b4Jhg/M8zqG28CR8R5KJPVWb4Me81Et4DgbCPbeXEagWHnqVtYHh1NpBaxo6xfzN1HD4cDp9bq9cfh0grmllf2e7i9NBeFRafSaRBAsZ8YjwsqWEZAy/aacvcfZPkB4ytGmRFu6g+neYuJEiQY7jZQuo3apiY4sOYDT43ErXbjszQSDqFilhDgJMRIkkgmdO41/0tDAuvH0eiVGOaPNg2PMscwAyZE95K1P2ccSy0PVOddundpyujyCquaHabC/c8/CfNZPByWsMHRzyOxe5FuLswjBZIuLPRn8ZDHBlURN2ub7pHONuoutRtZpGYEEayNF5y7GueGtc1stJAIJNiBa4sLLW4Tii05XH2XWI5HZw5FaRztPvgyyejqNrydQ7iDZhT/fWc1y73mdSj06xhdNnFqeMipGis0DGuv0FVY2LnwUn1eS1swD16l+w+ipUn5hEf6VEuOt0TD1osdDqfwToDRNbLb9E7H5jYm2vSx+vJVg7M6R2lWKPIaD3j11MKW6HRcZUtHL5/WyMypJgePjf5Ss/EVgGwO3grFFsC1rCeUbix1KixpGhQlxMExsTaesFSfiDmDQfqfryVGu8MbAMTAjfxPggsqhzmxYzeSdeaErGzebXc2IMHUwSr2G4y9uvtDkdfPVYmcm4n5/JFFWO6ktHX0OIsc3PmDRocxAg8rodTjFMWBLv6dPM6rj3ukg7fp+inTqR9bfimgZ3GEx7H+64TydY/HXwV4HsvPvXXVrDY5zdHHw/RDQJnbynzLncNxnTNB+ua0G8SZvmHgPzSKNOyUKvQqNf7rgfn5I4plICQK8R47XL61Z8zNSpHZ1R8f4QvacQcjHPJsxrnHs0E/gvCa7opNJ95zAT3c0A/j5qoHPnfhGc13siQPARMbnmVBxU37DohOVMzRWrvXVcCwZZTGYe04lx6TAA8IWFwjD56oJ91ntHvo3438F1rL723Px/BY5pc1PU9Bi/3f4C4dmZ06bCdxzRKzY0M6d/rVEoNAgnYKFQ21181yM9iITDvj2dxp2mVaD5E+B3+tVmMde2oVqlUhNMJUy0WDcn63RGPg69j2/Gygx8x35IlRoLS06fHuOtpVEP6NahTblfUEy4S4E2Ba2LDbRZOAZDGnp/v4oP8RNNlRrjJDTf7w0zRseaJhT7LW7BoJPUiQFLZljxuMmi9RuR5rRw9OYbzdHmRPwlU6AAiepW5w+k1wGk+24eDR/3KfJWSeqbGp1BMkbzCt+sab5VT9UQpZDyK7LPIo8de8W669rfqhGJsdfDRU/XkWCQqW8TMweX6rS5GGsS6WkWTZOSqsqEGJMdLolKqQ6dRcfQVbuvBOnS/Rtp8PzVptQbabDlztzlZTajjoTHIRO4SFTYm43IOg7apOVj1f2adFwLj8THirjn9Y6LCoYyJ3nmBqNFcbjRMlpmBE22v/tDaBRZbrukROnc6jRCpTIPLU8oJumFRh1JAJiLEdJOwUswAJ2gXkG5vrojZCcZGrh8R7EDaRp1PPkE7nnSZWbRrRmHcgeEn80RtaLzEjNtOU766KbRX6i/TFp2KTNTr9a9lWGIyiHGOUGQQZIMhL98lkgReNZk9xPJGxaQd7pNp53OyJQqQZlV5kZg4RvcAwLe6b8tkbDFrnBpdBO0HUzG3NNtUCTsvMri++/UI7MTGht1/NRPC3ECAJ3JO87WRW8IfHvbG02nbZQUmglLF8jf63Wnh+JvbuVl/wAIf95o8/yRG8KqD7bfj+STDZFz0k4wRg8RMe1TeydDLxkEf3LyniZ0bNgQ3+0XHxXo3FODPq0nMe8AWdIBPunNB6WXmeNfmf5nxcSflC0g+HNn61RXKBWKO5LB4b1lRjNib9hc/AJ/yQldI2eC4XIwTYvhxm3YeW3da7W6A2mY5d1co4UERCVXCObDheNjcLhlkt9PfwVGCiVnHKDMWVf94m2hH47KhxDGEnKLOnQ7XuVHhjzdrveBv1OsjvKTjyzt2j4NFhgg/XmjsdcoD27T4ItMz3SQmi5SJtyVtjwqVN/s21B8FNjtxobj8k30aRYfQY4+7O3mIcPIomFpZGxO5nuCg0qji6xA5zoYj42TCrr/AKU9G/NGnSdLgfDwI/MDyW9SrQ6kJ94OaY5OygfELnsDzPh8rq87FRWYbHI1nnLnfiPJK6MckL5/f/DqBQhPlCtNexzQ6QJAOo3CxanFgXHJTLmgkB1rxqRfSV13R4zfTw1+HbfKXTaxuOu08vNCcxzbi4i9iIPj81NtTKSZdHUaeKmyo4OBLSWnWJPkVsY8K7GuO8fWisswT9i0jof0T4lkwchFpt1NkBzQDuI5idroAOcJU+4T4j80OXgw6xGxtCk3FOBkO/D4KdTHvfqG2t7oNu26Ohwi9l4NupI8b8vyU2UXwCIIBtdpv5o1FjDIe4tnRwLTeJkt1jxV7h1KmYY2s/OMxnKxjYjQZpM63m87IFaRm1H3MEX1BLTEeKdrvuuAPSN/kuhxHAZILy8gxfIwOI194G1uiVHgtJurHO5OJLTr0MT4I1E8sUYVMua/MDykGw+dlPOcwIDXRaLRE6X2W+3hVGIDHA3k+sd8kv4JSP2T/c4/ijUXvRMU04Ay5SDJE2ynkZMabgoVIuZIkXgSHgEQcw0PPmujZwWj9z/J/wCaLS4LSGjPAy4f5SlqP3kYoYHG1QQfaIc4OdmOsHnfXdHwxDHZmvfAEzGh6Rqtn+DUfuBR/gNExZwHIH8UmhrNEjgsfUYR7eZpn2SHZtZOgMd1s0eMsk5jG0QbRreb+QWYfR/DnZ39xUmcApAEBzwOjh+SnVjeSMvJ0eHxTH+64Hz5A2nXVWGlc+zg9MXl5tB9qJ8QBdatN+URc9yXHnuimJyXwT4k6KNQjUU3/wD0K8WLpcTzJ/IL1vjuJLcNWI3Y9u+rhlHxIXkbo/X9PNXFUZS6xnLT9GGZqj3fdbH9x/8AErL2JV/0XxQD3sOroI6xMj4onyLLw05qzuKDwLkqpxrjDGMJFzsOqs4EAoPGOGNqMIIvseRXnqtunr264cZw5ucuebuLjJ73WiMOHmJLXiwcO+h5hUMCw06jqbrTEeG/ktTIdfFbTu7R0YWnBJh6b3Ns8afaHwnkjsAmxlCY8xe/wKTaR95n9p08I93w8ln5N0y4GEXvG6gx4Dsn3rtPUajx5JqWMizgRsJF58LO8L9FOtTDx7BuCCP5XDS3hcI8FXa4HpEfJFw7MxnltzjUqkYbL80Zi0ZIJvrZ0xtEKxh8SPdkDm6wAHIc0SKj3psUSJIJhupPLn1Oit0KrG5qj2ky4QNQM2Y6coELGxtbLRJg+25oYTu1oLnOnuWiF0Hoy8upPdYluSW9DN/OPNKMbkjh9VkcYumZ/E+PlwLWAgOBFxt9Whc/+/kWld/Vcx1nUmka/UKv+5Yb/wBhvxXY0jx9jxrOYOYGDewERzUsO5jiAxwExIMeWht9SkktBINUfkcWvc4CN2ZhqLW8byut4BwzD1KWdzGPIJbOZ7bAAiWkxvtbxSSSQ5fJHG8IwzbtpsB/qe4T2zaIJo0w0OfSogCBmEtA2EyT5nzSSVo5XN2FrYQMjNSa0ESPZEEdIMHVQNRrAXBjbDZjZ/MpJKkRKTsm6qHNzMeDI+45pB5EEfIlPSqGPaInm0EfAkpJIE2NUxQYJM8rCSi0cWxwkZusgC/4pJIEgor9/gitqjn+P4pJJMom2r9WRQ9JJSxom1/VEbUSSUsYUVE7HpJILRg+mPEWMoOZm9t5ECdACHSeWi88LrJJJiYq7w1t/olZLKzmuDmkggyDySSVIqJ3no9xovALhDtDyPULrabw9qSS8/MkpcPUwybj0weP8Fz+2yz23HUcisvDPcRlc0y33gbFMkrj4OrE+l5jxGn6ItI69dE6ShnWvBI3tYDtM9xKA6q0H3hMWIhp5WJkxcJJIiDKtR8hziXaycxdkMTBA0FidI3V/htNhcfWEACCSXNa0DcATLjB2SSSn4Lx+aGfXAlrDLJMB1wRsSO2+q6/0YeBmAsHMdbkQ2Y8CkklD4Of/IRSTr6NLMhwEkl2nz5//9k=" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body ">
                            <h5 class="card-title ">Bên ngoài cửa sổ</h5>
                            <p class="card-text text-white">2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col"> 
                        <div class="card bg-dark text-white ">
                        <img src="https://m.media-amazon.com/images/M/MV5BMTBhNDliNTUtNGUyNy00ZTdlLTk5YzMtYTcyNTQwOGNlZGIzXkEyXkFqcGdeQXVyNjgyMTI1MDE@._V1_.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body ">
                            <h5 class="card-title">Dicibel</h5>
                            <p class="card-text">2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark text-white">
                        <img src="https://i.ytimg.com/vi/PaB7cGBuCP0/maxresdefault.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body">
                            <h5 class="card-title">My fault</h5>
                            <p class="card-text">2023</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-dark text-white">
                        <img src="https://q9c3t4p4.rocketcdn.me/wp-content/uploads/2023/01/Dog-Gone-Cast-Netflix-Every-Actor-Character.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body ">
                            <h5 class="card-title ">Dog gone 7</h5>
                            <p class="card-text">2023</p>
                    </div>
        </div>
    </div>
        </div> <!-- end-phim mới -->
<style>
    .card-img-top {
    height: 200px;
    }
    .col {
        color: #fff;
    }
    .col:hover {
        color: blue;
    }
    .col a  {
        color: #fff;
    }
    .col a:hover {
        text-decoration: none;
        color: orange;
    }
    .flims .col:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #000;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s ease;
    }
    .flims .col:hover {
        text-decoration: none;
        transform: translateY(-5px);
    }
    .container  a:hover {
        text-decoration: none;
    }
    .container {
        position: relative;
    }
</style>
@endsection
