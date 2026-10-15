# SisterMart 共识交接包（从此目录同步到 SisterMart 会话）

> 本目录由 bagisto 会话整理并推送。  
> **请在 SisterMart 新会话中**把下列文件同步进 `ec2ec/SisterMart` 的对应 `docs/` 路径。

仓库目标：`https://github.com/ec2ec/SisterMart.git`

## 建议落盘映射

| 本交接包路径 | 同步到 SisterMart 仓 |
| --- | --- |
| `00-会话交接与共识索引.md` | `docs/工程規劃/00-会话交接与共识索引.md` |
| `01-决策冻结总表.md` | `docs/工程規劃/01-决策冻结总表.md`（或合并进已有技术栈冻结） |
| `需求分析/SisterMart-H5-商城產品需求文檔-PRD.md` | `docs/需求分析/SisterMart-H5-商城產品需求文檔-PRD.md` |
| `工程規劃/00-技术与工程总规划.md` | `docs/工程規劃/02-技术与工程总规划-详细版.md` |
| `工程規劃/01-一期范围对照表.md` | `docs/工程規劃/03-一期范围对照表.md` |
| `工程規劃/02-H5-UI库选型对比.md` | `docs/工程規劃/04-H5-UI库选型对比.md` |
| `工程規劃/03-里程碑拆分与验收门禁.md` | `docs/工程規劃/05-里程碑拆分与验收门禁-详细版.md` |
| `設計素材/頁面框架截圖/`（45 张 PNG） | `docs/設計素材/頁面框架截圖/` |

> 若 SisterMart 已有简版冻结文档，**以本包详细版 + 完整 PRD 为准补全**，不要删掉已有 M0 关闭记录。

## 页面框架截图

来源：`docs/需求分析/SisterMart-H5-頁面框架圖.html`（PRD 1.4），共 **45** 个页面手机框截图。  
目录：`設計素材/頁面框架截圖/`（含该目录 README 索引）。

## 给 SisterMart 会话的一句话指令

```text
请从 bagisto 仓库分支 cursor/update-shop-header-logo-c559
读取 docs/SisterMart-共识交接/ 全部文件（含 設計素材/頁面框架截圖/），
按 README 映射写入本仓 docs/，commit 并 push，然后确认文件树。
以 00-会话交接与共识索引.md 与完整 PRD 为真源。
```
