-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 05 月 16 日 08:44
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `toursystem`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_admin`
--

CREATE TABLE IF NOT EXISTS `tp_admin` (
  `aid` int(4) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `aname` varchar(30) NOT NULL COMMENT '管理员账号',
  `apwd` char(32) NOT NULL COMMENT '管理员密码',
  `asex` int(1) NOT NULL DEFAULT '1' COMMENT '管理员性别',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tp_admin`
--

INSERT INTO `tp_admin` (`aid`, `aname`, `apwd`, `asex`) VALUES
(1, 'Mary', 'zjj123', 0),
(2, 'lili', 'li1234', 0),
(3, '1111', '111111', 1),
(4, '1111', '111111', 1),
(5, 'zhang', 'zhang123', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_hotel`
--

CREATE TABLE IF NOT EXISTS `tp_hotel` (
  `hid` int(4) NOT NULL AUTO_INCREMENT COMMENT '酒店id',
  `hname` char(32) NOT NULL COMMENT '酒店名称',
  `hcity` char(20) NOT NULL COMMENT '酒店所在城市',
  `hphone` varchar(20) NOT NULL COMMENT '酒店电话',
  `hlevel` varchar(20) NOT NULL COMMENT '酒店星级',
  `hroom` varchar(255) NOT NULL,
  `haddress` varchar(50) NOT NULL COMMENT '酒店地址',
  `hinfo` text NOT NULL COMMENT '酒店简介',
  `hbimg` varchar(255) NOT NULL COMMENT '酒店图片',
  `aname` varchar(30) NOT NULL COMMENT '发布人',
  `hctime` datetime NOT NULL COMMENT '最后操作时间',
  PRIMARY KEY (`hid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tp_hotel`
--

INSERT INTO `tp_hotel` (`hid`, `hname`, `hcity`, `hphone`, `hlevel`, `hroom`, `haddress`, `hinfo`, `hbimg`, `aname`, `hctime`) VALUES
(1, '宝鸡建国饭店', '宝鸡', '0917-3856666', 'AAAAA', '', '宝鸡市金台区行政东路南段', '宝鸡建国饭店是一家由“西北有色七一七总队”投资兴建的一家多功能豪华型酒店。饭店位于宝鸡市行政中心东路南段，南依渭水远眺秦岭，北望蟠龙塬，西邻行政中心广场，交通便利，周边配套设施齐全。饭店总体建筑面积5.6万平米，所有区域WIFI覆盖。饭店拥有267套装修精美的客房，为您带来全新的休憩体验；精品屋、商务中心为您解决出行所需；各具特色的风味餐厅及29个豪华包房，在提供优质可口的菜肴同时，并能满足您就餐的不同需求；900平米宴会大厅及7个现代化会议室，是举办公司会议、大型宴会的理想选择；SPA中心、健身中心、游泳池、电玩厅、台球/兵乓球室、模拟高尔夫球室、理容中心等完善的康体娱乐等现代化设施。使您在忙碌的商旅活动中，得到很好的放松享受。', '', '', '0000-00-00 00:00:00'),
(5, '阳光大酒店', '西安', '029-1239120', 'AAAA', '查看详情', '陕西省西安市火车站附近', '全国连锁，质量有保障！', '', 'lili', '2017-05-13 23:25:00'),
(6, '龙嘉国际酒店', '宝鸡', '0917-1190201', 'AAAAA', '', '陕西省宝鸡市火车站西100米', '', '', 'lili', '2017-05-15 00:00:00'),
(7, '凤凰大酒店', '西安', '0917-2019014', 'AAA', '', '陕西省宝鸡市凤翔县西区', '原身是凤翔党校', '', 'lili', '2017-05-16 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `tp_tourist`
--

CREATE TABLE IF NOT EXISTS `tp_tourist` (
  `tid` int(4) NOT NULL AUTO_INCREMENT COMMENT '景点id',
  `tname` varchar(32) NOT NULL COMMENT '景点名称',
  `tcity` varchar(32) NOT NULL COMMENT '景点所在城市',
  `tlevel` char(50) NOT NULL COMMENT '景点等级',
  `ttype` varchar(40) NOT NULL COMMENT '景点类型',
  `taddress` varchar(100) NOT NULL COMMENT '景点详细地址',
  `tabstract` varchar(255) NOT NULL COMMENT '景点简介',
  `ticket` varchar(80) NOT NULL COMMENT '门票信息',
  `tinfo` text NOT NULL COMMENT '景点详细信息',
  `tbimg` varchar(255) NOT NULL COMMENT '相关的大图片',
  `tline` text NOT NULL COMMENT '公交路线',
  `aname` varchar(32) NOT NULL,
  `tctime` datetime NOT NULL COMMENT '最后操作时间',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- 转存表中的数据 `tp_tourist`
--

INSERT INTO `tp_tourist` (`tid`, `tname`, `tcity`, `tlevel`, `ttype`, `taddress`, `tabstract`, `ticket`, `tinfo`, `tbimg`, `tline`, `aname`, `tctime`) VALUES
(1, '西安大唐芙蓉园', '西安', 'AAAAA', '园林，公园，亭台楼阁', '陕西省西安市芙蓉西路99号大唐芙蓉园', '大唐芙蓉园是首家唐文化主题公园。全球幅宽最大的水幕电影。全国最大的人工雕塑群落。全球最大最先进的水火景观表演。国内最长唐文化长廊。《梦回大唐》大型歌舞品鉴。中国第一个五感（视觉、听觉、嗅觉、触觉、味觉）公园。世界最大的户外香化工程。 ', '成人门票价：83元起（省37元）； 特惠政策： A.免票政策：儿童身高1.2米以下免票（不含1.2米）；军人持军官证、残疾人持残疾证免票。 B.优惠政策：儿童身', '“盛唐主题天下第一园”大唐芙蓉园位于古城西安东南曲江新区，建于原唐代芙蓉园遗址以北，总投资13亿元，占地1000亩，其中水面300亩，是以水为核心，集体验观光、休闲度假、餐饮娱乐为一体，浓缩盛唐文化的大型主题博物园。中国工程院院士张锦秋担纲总体规划与建筑设计，日本园林大师秋山宽承担园林景观设计。大唐芙蓉园以建成“历史之园、精神之园、自然之园、人文之园、艺术之园”为目标，特别邀请了中国唐代文学学会的十多位唐史、唐诗、唐画、唐建专家、博士生导师、研究员以及旅游专家组成的专家小组对大唐芙蓉园的历史文化内容进行重新挖掘和整理，对全园景观进行了重新规划与定位，划分出了十二个景观文化表现区域： \n1、大门特色文化主题：创演盛世气概，梦回盛唐帝国。用宏大气势，震慑游客。大唐盛景，犹览一斑。帝里故乡，梦回盛唐。做到一门一主题，一门一特色，一门一景观。 \n2、外交文化主题：兼容并蓄、有容乃大的包容精神。展现当时各国使节的频繁往来及民间“商贾云集、内外通融”的商业文化氛围，将“四方珍奇，皆所积集”的繁荣景象展现在游客的面前，让游客切身感受到盛唐时期世界诸国与唐帝国往来的开明盛世。 \n3、茶文化主题：三篇陆羽经，七度卢仝茶，临窗会友，细味禅茶，笑看曲江波，淡然超脱间。展现唐代茶道文化。从世界茶文化的发展史看，无论是日本茶道、中国茶道其起源都在唐朝。“茶道”从唐代提出后才开始了传播与发展。', '', '乘坐公交5、19、21、22、24、27、30、34、41、44、212、224、237、320、400、408、500、501、521、527、601、606、609、610、701、715、721、720、游4、游6、游8、游9路可到。 提示：游客可从大唐芙蓉园站和大唐芙蓉园西门站下车入园。大唐芙蓉园开放西门和南门，其中西门为正门，一般游客都是从此门进入。大唐芙蓉园南门不临街，入口在“唐市”里面，如果找不到可以向工作人员询问。', '', '0000-00-00 00:00:00'),
(2, '宝鸡法门寺', '宝鸡', 'AAAA', '寺庙', '陕西省宝鸡市扶风县城北10公里处的法门镇', '法门寺位于陕西省扶风县城北十公里的法门镇。始建于东汉末年，发迹于北魏，起兴于隋，鼎盛于唐，被誉为“皇家寺庙”，因安置释迦牟尼佛指骨舍利而成为举国仰望的佛教圣地。', '成人票：￥120', ' 地宫发现\r\n    1981年8月24日，宝塔半边倒塌。1986年政府决定重建，1987年2月底重修宝塔。适逢四月初八佛诞日，“从地涌出多宝龛，照古腾今无与并”，在沉寂了1113年之后，2499件大唐国宝重器，簇拥着佛祖真身指骨舍利重回人间！地宫内出土的稀世珍宝，不论在中国社会政治史、文化史、科技史、中外交流史、美术史等方面的研究上，都具有极其重要的价值。1988年，法门寺正式开放并举办了国际性的佛指舍利瞻礼法会。海内外诸山长老及各界代表共三百余人参加法会。十多年来，法门寺在前任方丈澄观、净一法师的住持下，相继建成大雄宝殿、玉佛殿、禅堂、祖堂、斋堂、寮房、佛学院等仿唐建筑。\r\n    法门寺珍宝馆，位于陕西省扶风县城北，东距西安110公里，西宝、法汤高速公路贯通，交通条件十分便利。法门寺因安置佛祖释迦牟尼指骨舍利，为华夏王朝所拥戴而成为我国古代四大佛教圣地之一。唐代尊奉法门寺佛指舍利为护国真身舍利，曾有八位皇帝每三十年开启一次法门寺地宫，迎舍利于皇宫供养。1987年4月3日发现法门寺唐代地宫，在地下沉睡1113年的辉煌灿烂的唐代文化宝藏――佛教世界千百年来梦寐以求的佛祖释迦牟尼真身指骨舍利、李唐王朝最后完成的大唐佛教密宗佛舍利供养曼茶罗世界以及数千件李唐皇室供佛绝代珍宝得以面世，这批文物包括：四枚佛祖释迦牟尼真身指骨舍利，这是目前世界仅存的佛指舍利；唐皇室供奉的一百二十一件（组）金银器；首次发现的唐皇室秘色瓷系列；米至古罗马等地的琉璃器群；上千件荟萃唐代丝织工艺的丝（金）织物，其中包括武则天等唐皇帝后绣裙、服饰等均是稀世珍宝；这些奇珍异宝数量之多、品类之繁、等级之高、保存之完好是极为罕见的。 \r\n    这是继半坡、秦兵马俑之后我国又一次重大考古新发现，是世界文化史上一件幸事2001年博物馆又新建成四大陈列“法门寺历史文化陈列”、“法门寺佛教文化陈列”、“法门寺唐密曼茶罗文化陈列”、“法门寺大唐珍宝陈列”和“法门寺唐代茶文化陈列”。目前，法门寺文化景区已成为陕西西线旅游的龙头单位和世界佛教朝拜中心、佛教文化研究中心和海内外人士向往的旅游胜地。', '', '公交： 城西客运站坐西安到扶风的班车，再坐班车到法门寺。\r\n自驾：西安-福银高速乾陵出口下--（乾陵东门上）乾陵大陵（乾陵南门下）--永泰公主墓--209省道--法门寺。', '', '0000-00-00 00:00:00'),
(12, '朱雀山', '', '', '', '', '', '', '', '', '', 'lili', '2017-05-09 22:42:00'),
(11, '北山公园', '吉林', '', '', '', '', '', '', '', '', 'zhang', '2017-05-09 22:41:29'),
(13, '净月潭', '长春', '', '', '', '', '', '', '', '', 'lili', '0000-00-00 00:00:00'),
(21, 'freff', '西安', 'AAAA', 'deww', 'wweeds', 'edffcszfdcvsevfdvx', 'efdsfz', '<p>regsfa各色人呵呵挺好</p>', '', 'feds方法', 'lili', '2017-05-11 00:00:00'),
(22, '灵山', '宝鸡', 'AAAA', '公园', '陕西省宝鸡市凤翔县', '佛教圣地', '无', '<p>每年有很多人去</p>', '', '班车', 'lili', '2017-05-11 00:00:00'),
(23, '给他人很好的发挥', '西安', 'AA', '园林', '景点地址', '家呢的方式那就看看看，', '无', '<p>恶恶个好人具体要看减肥</p>', '', '班车', 'lili', '2017-05-11 00:00:00'),
(24, '西安临潼骊山', '西安', 'AAAA', '山脉', ' 西安临潼区城南', ' 骊山，位于西安临潼区城南，属秦岭山脉的一个支脉，靠着兵马俑博物馆，最高峰九龙顶海拔 1301.9米，山势逶迤，树木葱茏，远望宛如一匹苍黛色的骏马而得名。骊山也因景色翠秀，美如锦绣，故又名“绣岭”。每当夕阳西下，骊山辉映在金色的晚霞之中，景色格外绮丽，有“骊山晚照”之美誉。', '70元每人次', '<p><span style="color: rgb(85, 85, 85); font-family: &quot;microsoft yahei&quot;, arial; font-size: 14px; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;骊山是中国名山之一，她是唐华清宫的重要组成部分。其森林景观独具特色，有千亩侧柏林、骊山拧拧柏、八戒显形树等。其山势峻峭断层地貌别具一格。中华上下五千年文化在骊山均留下烙印，古迹遗址星罗棋布、历史文化博大精深、离宫别墅皇家风范、地热温泉极具魅力。“骊山云树郁苍苍，历尽周秦与汉唐。一脉温汤流日夜，几抔荒冢掩皇王。”郭沫若先生的这两句诗恰到好处地向人们诉说着骊山的历史。这里已构成了一处殊堪神往的旅游胜地。</span></p>', '', '临潼区内设101、102、201、301、826路公交车辆及城区至阎良区等地的公交中巴', 'lili', '2017-05-11 00:00:00'),
(25, 'frgjklrtgkldf', '西安', 'AAAA', '公园', '发热和他', '热糊涂将与游客iukui', '50元', '<p>反对任何痕迹一同观看iuj</p>', '', '40路', 'lili', '2017-05-11 00:00:00'),
(26, 'grdhtfgjyuhkj', '西安', '', 'thfgjhg', 'trjghjgfkyhj', 'rtdujhyyserrtgfhj', 'reyhfgv', '<p>eryshdhtdgjcj</p>', '', '', 'lili', '2017-05-11 00:00:00'),
(27, 'ewgysru56kjiuylk', '西安', 'ytkj,fkjhvg', 'tydjkugiftyhg', 'yjtdjgkrrit8uygjt', 'rstue65ur7yukmfytdjue65uijtyhtf', 'rt5ue6y', '<p>srtjyufklkdtjxchg</p>', '', 'ytmfkhg', 'lili', '2017-05-11 00:00:00'),
(28, 'weft4w3gter', '西安', 'ewgrse', 'ewga4hgtrffht', 'erasthyfjm', 'rejstyhhgmhfyj', '', '<p>trdjyhbm</p>', '', 'ee4gtr54ree', 'lili', '2017-05-11 00:00:00'),
(29, '说的vbhrtfdmkj', '西安', '', '的社保覆盖', '第三部分v', '无缝管变得十分', '', '<p>的吧并非个别地方vxb</p>', ')HS0)R_QHI1WAS_F5XY~R$Y.jpg', '额但是根本', 'lili', '2017-05-11 00:00:00'),
(30, 'ngfmcnmc', '西安', 'AAA', 'wdefgre', 'grtshssd', 'drthrdjkdtykdj', 'egry54u6tr', '<p>et43yhresjtftky</p>', '', 'e32', 'lili', '2017-05-11 00:00:00'),
(31, 'drfhfhdhf', '西安', 'r3w4tger5', 'ere', 'ert', 'greht', 're', '<p>grth</p>', '', '', 'lili', '2017-05-11 00:00:00'),
(32, 'fhrjtf', '西安', 'jghmjjh.,.krzej', 'htjdkkjreshjk', 'htrsk6ijureyws', 'htr6ksuezsjklkuy', 'trh5usks', '<p>trhs5kl8orewaeusikjhredhxd</p>', '', '', 'lili', '2017-05-11 00:00:00'),
(33, '突然就让人记住', '西安', 'AA', '热饿饿好时间', '过热喝酒手机上天涯就突然', '热容好人金黄色日渐恶化给他然后就', '33', '<p>俄方然后结合具体研究哟带来利润和经验的领导看itjrhejzrsdtyklkfytjgn</p>', '', '21', 'lili', '2017-05-11 00:00:00'),
(34, '撒旦vgdbd', '延安', '的晚饭过后过热', '热水管和家人身体', '我让个人获奖', '儿哈囧啊好痛苦与金融计划共同分摊', '热热身人家是愚人节', '<p>热合个话题近日寒风</p>', '', '15', 'lili', '2017-05-11 00:00:00'),
(35, '撒旦vgdbd', '延安', '的晚饭过后过热', '热水管和家人身体', '我让个人获奖', '儿哈囧啊好痛苦与金融计划共同分摊', '热热身人家是愚人节', '<p>热合个话题近日寒风</p>', '', '15', 'lili', '2017-05-11 00:00:00'),
(36, '市场擦拭', '商洛', '王德飞', '我的确few', '我的气氛企鹅', '的vghrtjz', '43', '<p>认同额好突然加速软件和软件急急急急急急经历</p>', '', '11', 'lili', '2017-05-11 00:00:00'),
(37, '萨芬围观', '榆林', '二哥华为', '43光和热', '热望给我', '忘给他任何让个哈哈哈哈', '21', '<p>日提供好人热价啊</p>', '', '17', 'lili', '2017-05-11 00:00:00'),
(38, '人格呵呵', '渭南', '额喝瓦罐', '4何额哈额啊喝酒', '饿4和软件和同仁们', '丫头以后就一天的热点摄入', '53re', '<p>3他2有钱已经有人说今天6截图咯咯p；ogre和他认识就是热色人格呵呵</p>', '', '32', 'lili', '2017-05-11 00:00:00'),
(39, '的复活节', '延安', '5月u', '荣土人就', '5ueier', '儒体考r''lo人咯投入巨大推荐', '65', '<p>556ueikdyjgueikdyjgtffg</p>', '', '54', 'lili', '2017-05-11 00:00:00'),
(40, 'freff', '铜川', 'svcdsv', 'fvd', 'svegbn', 'dsvbrjtykyxfdhmgf', '21', '<p>afwgheajss</p>', '', '12', 'lili', '2017-05-12 00:00:00'),
(41, 'freff', '咸阳', 'fdvhgtmjtyyku', 'tgjkdyjrftdrkylk', 'tjkidytcyk', 'thki6ytrx', '43', '<p>ewy4ys5ujui5s</p>', '', '12', 'lili', '2017-05-12 00:00:00'),
(42, 'grtshejshdf', '西安', 'AAA', 'derhtyjjmrfxd', 'htrrdjdhrfd', 'thrjtyddm', '45', '<p>trhjsrdtydk,</p>', '', '43', 'lili', '2017-05-12 00:00:00'),
(43, 'grtshejshdf', '西安', 'AAA', 'derhtyjjmrfxd', 'htrrdjdhrfd', 'thrjtyddm', '45', '<p>trhjsrdtydk,</p>', '', '43', 'lili', '2017-05-12 00:00:00'),
(45, '东风水库', '宝鸡', 'AAA', '山脉', '陕西省凤翔县柳林镇', '夏天有很多人去钓鱼。', '无', '<p>很美很凉爽！<br/></p>', '', '专车接送', 'zhang', '2017-05-15 00:00:00'),
(46, '关山牧场', '宝鸡', 'AAA', '森林', '陕西省宝鸡市陇县', '风热', '129', '<p>34恶童入伙域ijukortkyft</p>', '', '23', 'zhang', '2017-05-15 00:00:00'),
(47, '大佛寺', '宝鸡', 'AAA', '寺庙', '宝鸡市凤翔县柳林镇大佛寺村', '庙会', '11', '<p>烧香拜佛</p>', '', '21', 'zhang', '2017-05-15 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `uid` int(4) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `upwd` char(32) NOT NULL,
  `sex` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`uid`, `uname`, `upwd`, `sex`) VALUES
(1, 'zjj', 'zjj123', 0),
(2, 'amy', 'amy123', 0),
(3, '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
